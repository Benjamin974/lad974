<?php

namespace App\Utils;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Support\Facades\Validator;

class DeliveryManUtils
{

    static function getDeliveryManId()
    {
        return User::where('id_role', 3);
    }

    static function validateDeliveryMan($req)
    {
        return Validator::make(
            $req->all(),
            [
                'id' => 'required',
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();
    }

    static function changeDeliveryManBdd($deliveryMan, $validator)
    {
        $deliveryMan->name = $validator['name'];
        $deliveryMan->email = $validator['email'];
        $deliveryMan->password = $validator['password'];

        return $deliveryMan;
    }

    static function deleteAddressDeliveryMan($id): void
    {
        $addressDeliveryMan = UserAddress::where('id_user', $id)->first();

        if (isset($addressDeliveryMan)) {
            $addressDeliveryMan->delete();
        }
    }
}
