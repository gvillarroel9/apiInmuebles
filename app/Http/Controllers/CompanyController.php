<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Company::all();
        return response()->json($company, 200);
    }

    public function show(Company $company)
    {
        return $company;
    }

    public function store(Request $request)
    {
        $company = Company::create($request->all());
        return response()->json($company, 201);
    }
    
    public function createCompany(Request $request)
    {
        $request->validate([
            'name'     => 'required|string',
            'rif'     => 'required|string',
            'countryId' => 'required|integer',
            'cityId' => 'required|integer',
            'address'     => 'required|string'
        ]);

        $user = new Company([
            'name'=> $request->name,
            'rif' => $request->rif,
            'countryId'    => $request->countryId,
            'cityId' => $request->cityId,
            'address' => $request->address,
        ]);       

        $user->save();
        return response()->json([
            'message' => 'Successfully created company!'], 201);
    }
    
    public function update(Request $request, Continent $company)
    {
        
        $company->update($request->all());

        return response()->json($company, 200);
    }

    public function delete(Company $company)
    {
        $company->delete();
        return response()->json(null, 204);
    }


}
