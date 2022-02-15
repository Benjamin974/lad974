<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommandProductsResource;
use App\Models\Address;
use App\Models\Command;
use App\Models\CommandesProducts;
use App\Models\CommandProducts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;

class FacturesController extends Controller
{
    public function getFacture(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'id' => 'required',
                'client' => 'required'
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();

        $command = Command::with(['commandHasProducts'])->where('id', $validator['id'])->first();
        $commandProducts = CommandProducts::where('id_command', $command['id'])->get();
        $collectionCommand = CommandProductsResource::collection($commandProducts);
        $facturation = Address::find($command['id_facturation_address']);
        $clientAddress = Address::find($command['id_delivery_address']);
        $company = User::find($command['id_user']);
        $client = User::find($validator['client']);

        $pdf = PDF::loadView('pdf.facture', compact("collectionCommand", "command", "facturation", "company", "client", "clientAddress"));
        return $pdf->stream();

    }
}
