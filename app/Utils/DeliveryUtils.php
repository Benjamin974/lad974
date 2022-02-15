<?php

namespace App\Utils;

use Illuminate\Support\Facades\Validator;

class DeliveryUtils
{

  static function validateDelivery($req)
  {
      return Validator::make(
          $req->all(),
          [
              'id' => 'required',
              'id_delivery_man' => 'required',
              'id_command' => 'required',
              'id_status' => 'required',
          ],
          [
              'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
          ]
      )->validate();
  }

  static function updateDeliveryBdd($delivery, $validator)
  {
      $delivery->id_delivery_man = $validator['id_delivery_man'];
      $delivery->id_command = $validator['id_command'];
      $delivery->id_status = $validator['id_status'];

      return $delivery;
  }

}