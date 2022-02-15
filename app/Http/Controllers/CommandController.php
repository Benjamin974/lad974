<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommandResource;
use App\Models\Address;
use App\Models\Command;
use App\Models\Product;
use App\Models\StatusCommand;
use App\Utils\CommandUtils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Exception;

class CommandController extends Controller
{
    public function getAll($id)
    {
        $commands = Command::where('id_user', $id)->get();
        return CommandResource::collection($commands);
    }

    public function add(Request $request)
    {
        $validator = CommandUtils::validateCommand($request);

        $command = new Command;

        $command = CommandUtils::changeCommandBdd($command, $validator);
        $command->save();

        return new CommandResource($command);
    }

    public function delete($id)
    {
        $command = Command::find($id);
        $del = $command->delete();

        if ($del) {
            return response()->json([
                'error'  => false,
                'message'   => "la commande est supprimé"
            ], 200);
        } else {
            return response()->json([
                'error'  => true,
                'errorList'   => 'un problème est survenu dans la suppression',
            ], 422);
        }
    }

    public function command(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'commandList' => 'required',
                'facturation' => 'required',
                'livraison' => 'required', 
                'price'  => 'required'
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();

        $livraison = CommandUtils::createAddress($validator['livraison']);
        $facturation = CommandUtils::createAddress($validator['facturation']);

        $command = new Command();
        $command->id_user = 1;
        $command->id_status = 1;
        $command->id_delivery_address = $livraison->id;
        $command->id_facturation_address = $facturation->id;
        $command->price = $validator['price'];
        $command->save();

        foreach ($validator['commandList'] as $_product) {
            $product = Product::find($_product['id']);
            $quantite = $_product['quantite'];
            $command->commandHasProducts()->attach($product, ['quantite' => $quantite, 'id_company' => $product->id_company]);
            $product->quantite = $product->quantite - $quantite;
            $product->save();
        }
        return $command;
    }

    function paiement(Request $request, $id)
    {
        $paiement = Validator::make(
            $request->input(),
            [
                'id' => 'required',
            ]
        )->validate();
        $order = Command::find($id);

        try {
            $charge = Stripe::charges()->create([
                'amount' => $order['price'],
                'currency' => 'EUR',
                'source' => $paiement['id'],
                'description' => 'Description',
                'receipt_email' => 'benjaminjulienne0@gmail.com',
                'metadata' => [
                    'data1' => 'metadata 1',
                    'data2' => 'metadata 2',
                    'data3' => 'metadata 3'
                ],
            ]);
            $status = StatusCommand::with(['command'])->find(2);
            $order->status()->associate($status);
            $order->save();
            return ['paiement' => $charge, 'status' => $order];
        } catch (Exception $e) {
            $status = StatusCommand::with(['command'])->find(1);
            $order->status()->associate($status);
            $order->save();
            return ['error' => $e, 'status' => $order];
        }
    }
}
