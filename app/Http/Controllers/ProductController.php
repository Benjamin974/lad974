<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function get()
    {
        $products = Product::paginate(9);
        return ProductResource::collection($products);
    }

    public function find($id)
    {
        $product = Product::find($id);
        return new ProductResource($product);
    }

    public function addUpdate(Request $request)
    {
        $validator = $this->validateProduct($request);
        $product = '';

        if (isset($validator['id'])) {
            $product = Product::find($validator['id']);
        } else {
            $product = new Product;
        }

        $product = $this->changeProductBdd($product, $validator);
        $product->save();

        return new ProductResource($product);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $del = $product->delete();

        if ($del) {
            return response()->json([
                'error'  => false,
                'message'   => "le produit est supprimé"
            ], 200);
        } else {
            return response()->json([
                'error'  => true,
                'errorList'   => 'un problème est survenu dans la suppression',
            ], 422);
        }
    }

    private function validateProduct($req)
    {
        return Validator::make(
            $req->all(),
            [
                'id' => '',
                'name' => 'required',
                'price' => 'required',
                'quantite' => 'required',
                'id_company' => 'required'
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();
    }

    private function changeProductBdd($product, $validator)
    {
        $product->name = $validator['name'];
        $product->price = $validator['price'];
        $product->quantite = $validator['quantite'];
        $product->id_company = $validator['id_company'];

        return $product;
    }
}
