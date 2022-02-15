<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use App\Models\Product;
use App\Utils\CompanyUtils;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function getAll()
    {
        $companies = Company::paginate(9);
        return CompanyResource::collection($companies);
    }

    public function getBest()
    {
        $companies  = Company::orderBy('note', 'desc')->limit(3)->get();
        return CompanyResource::collection($companies);
    }

    public function find($id)
    {
        $company = Company::find($id);
        return new CompanyResource($company);
    }

    public function findByUser($id)
    {
        $company = Company::where('id_user', $id)
            ->with('products')
            ->get();
        return $company;
    }

    public function addUpdate(Request $request)
    {
        $validator = CompanyUtils::validateCompany($request);
        $company = '';

        if (isset($validator['id'])) {
            $company = Company::find($validator['id']);
        } else {
            $company = new Company;
        }

        $company = CompanyUtils::changeCompanyBdd($company, $validator);
        $company->save();

        return new CompanyResource($company);
    }

    public function delete($id)
    {

        CompanyUtils::deleteAllProductsCompany($id);
        $company = Company::find($id);
        $del = $company->delete();

        if ($del) {
            return response()->json([
                'error'  => false,
                'message'   => "l'entreprise est supprimé"
            ], 200);
        } else {
            return response()->json([
                'error'  => true,
                'errorList'   => 'un problème est survenu dans la suppression',
            ], 422);
        }
    }
}
