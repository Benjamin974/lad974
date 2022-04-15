<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeliveryResource;
use App\Models\Delivery;
use App\Utils\DeliveryUtils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DeliveryController extends Controller
{
    public function get($id)
    {
        $deliveries = Delivery::where('id_delivery_man', $id)->get();
        return DeliveryResource::collection($deliveries);
    }

    public function update(Request $request)
    {
        $validator = DeliveryUtils::validateDelivery($request);

        $delivery = Delivery::find($validator['id']);

        $delivery = DeliveryUtils::updateDeliveryBdd($delivery, $validator);
        $delivery->save();

        return new DeliveryResource($delivery);
    }

    public function delete($id)
    {
        $delivery = Delivery::find($id);
        $del = $delivery->delete();

        if ($del) {
            return response()->json([
                'error'  => false,
                'message'   => "la livraison est supprimé"
            ], 200);
        } else {
            return response()->json([
                'error'  => true,
                'errorList'   => 'un problème est survenu dans la suppression',
            ], 422);
        }
    }

    public function addDeliveryToDeliveryMan() {
        $validator = Validator::make(
            $request->all(),
            [
                'id_delivery_man' => 'required',
                'id_command' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();

        $delivery = new Delivery();
        $delivery->id_delivery_man = $validator['id_delivery_man'];
        $delivery->id_command = $validator['id_command'];
        $delivery->id_status = 1;
        $delivery->save(); 

        return new DeliveryResource($delivery);

    }
}
