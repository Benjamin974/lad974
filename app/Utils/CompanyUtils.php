<?php

namespace App\Utils;

use App\Models\Company;
use App\Models\Product;
use App\Models\Rating;
use Illuminate\Support\Facades\Validator;

class CompanyUtils
{

    static function addCompaniesNote()
    {
        $companies = Company::get();
        foreach ($companies as $company) {
            self::calculCompanyNote($company);
        }
    }

    static function calculCompanyNote($company)
    {
        $rating = Rating::where('id_company', $company->id)->get();
        $notes = array();
        if (count($rating) > 0) {
            foreach ($rating as $_rating) {
                array_push($notes, $_rating['note']);
            }
            $noteCompany = array_sum($notes) / count($notes);
            $company->note = $noteCompany;
            $company->save();
        }
    }

    static function validateCompany($req)
    {
        return Validator::make(
            $req->all(),
            [
                'id' => '',
                'name' => 'required',
                'address' => 'required',
                'city' => 'required',
                'picture' => 'required',
                'id_user' => 'required'
            ],
            [
                'required' => 'Le champs :attribute est requis', // :attribute renvoie le champs / l'id de l'element en erreure
            ]
        )->validate();
    }

    static function changeCompanyBdd($company, $validator)
    {
        $company->name = $validator['name'];
        $company->address = $validator['address'];
        $company->city = $validator['city'];
        $company->picture = $validator['picture'];
        $company->id_user = $validator['id_user'];

        return $company;
    }

    static function deleteAllProductsCompany($id): void
    {
        $productsCompany = Product::where('id_company', $id)->get();
        if (isset($productsCompany)) {
            foreach ($productsCompany as $product) {
                $_product = Product::find($product->id);
                $del = $_product->delete();
            }
        }
    }
}
