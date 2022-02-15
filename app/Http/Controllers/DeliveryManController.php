<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\UserAddress;
use App\Utils\DeliveryManUtils;
use Illuminate\Http\Request;

class DeliveryManController extends Controller
{

    public function getAll()
    {
        $deliveriesMan = DeliveryManUtils::getDeliveryManId()->get();
        return UserResource::collection($deliveriesMan);
    }

    public function find($id)
    {
        $deliveriesMan = DeliveryManUtils::getDeliveryManId()->find($id);
        return new UserResource($deliveriesMan);
    }

    public function update(Request $request)
    {
        $validator = DeliveryManUtils::validateDeliveryMan($request);

        $deliveryMan = DeliveryManUtils::getDeliveryManId()->find($validator['id']);

        $deliveryMan = DeliveryManUtils::changeDeliveryManBdd($deliveryMan, $validator);
        $deliveryMan->save();

        return new UserResource($deliveryMan);
    }

    public function delete($id)
    {
        DeliveryManUtils::deleteAddressDeliveryMan($id);
        $deliveryMan = DeliveryManUtils::getDeliveryManId()->find($id);
        $del = $deliveryMan->delete();

        if ($del) {
            return response()->json([
                'error'  => false,
                'message'   => "le livreur est supprimé"
            ], 200);
        } else {
            return response()->json([
                'error'  => true,
                'errorList'   => 'un problème est survenu dans la suppression',
            ], 422);
        }
    }
}
