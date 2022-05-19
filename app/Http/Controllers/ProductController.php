<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Utils\ProductUtils;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll($id)
    {
        $products = Product::where('id_company', $id)->paginate(9);
        return ProductResource::collection($products);
    }

    public function getMore($id)
    {
        $products = Product::where('id_company', $id)->get();
        return ProductResource::collection($products);
    }

    public function find($id)
    {
        $product = Product::find($id);
        return new ProductResource($product);
    }

    public function addUpdate(Request $request)
    {
        $validator = ProductUtils::validateProduct($request);
        $product = '';

        if (isset($validator['id'])) {
            $product = Product::find($validator['id']);
        } else {
            $product = new Product;
        }

        $product = ProductUtils::changeProductBdd($product, $validator);
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
}
