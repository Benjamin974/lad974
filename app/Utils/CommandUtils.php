<?php

namespace App\Utils;

use App\Models\Address;
use Illuminate\Support\Facades\Validator;

class CommandUtils
{

  static function validateCommand($req)
  {
      return Validator::make(
          $req->all(),
          [
              'id_status' => 'required',
              'id_delivery_address' => 'required',
              'id_facturation_address' => 'required'
          ],
          [
              'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
          ]
      )->validate();
  }

  static function changeCommandBdd($command, $validator)
  {
      $command->id_status = $validator['id_status'];
      $command->id_delivery_address = $validator['id_delivery_address'];
      $command->id_facturation_address = $validator['id_facturation_address'];

      return $command;
  }


static function createAddress($_address)
  {
      $address =  new Address();
      $address->address = $_address['address'];
      $address->name = $_address['name'];
      $address->pays = $_address['pays'];
      $address->ville = $_address['ville'];
      $address->postal_code = $_address['postal_code'];
      $address->id_user = 1;

      $address->save();

      return $address;
  }

}