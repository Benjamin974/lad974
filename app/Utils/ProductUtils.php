<?php

namespace App\Utils;

use Illuminate\Support\Facades\Validator;

class ProductUtils
{

  static function validateProduct($req)
  {
      return Validator::make(
          $req->all(),
          [
              'id' => '',
              'name' => 'required',
              'description' => 'required',
              'price' => 'required',
              'quantite' => 'required',
              'picture' => 'required',
              'id_company' => 'required'
          ],
          [
              'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
          ]
      )->validate();
  }

  static function changeProductBdd($product, $validator)
  {
      $product->name = $validator['name'];
      $product->description = $validator['description'];
      $product->price = $validator['price'];
      $product->quantite = $validator['quantite'];
      $product->picture = $validator['picture'];
      $product->id_company = $validator['id_company'];

      return $product;
  }

}