<?php

namespace App\Http\Controllers;

use App\HouseholdService;
use Illuminate\Http\Request;

class HouseholdserviceController extends Controller
{
    public function index()
    {
        $householdservice = Householdservice::all();
        return response()->json($householdservice, 200);
    }

    public function show(Householdservice $householdservice)
    {
        return $householdservice;
    }

    public function store(Request $request)
    {
        $householdservice = HouseholdService::create($request->all());
        return response()->json($householdservice, 201);
    }

    public function update(Request $request, Continent $householdservice)
    {
        
        $householdservice->update($request->all());

        return response()->json($householdservice, 200);
    }
}
