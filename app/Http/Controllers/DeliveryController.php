<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeliveryResource;
use App\Models\Delivery;
use App\Utils\DeliveryUtils;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function getAll()
    {
        $deliveries = Delivery::get();
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
}
