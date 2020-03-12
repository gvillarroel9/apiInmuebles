<?php

namespace App\Http\Controllers;

use App\HouseholdComodity;
use Illuminate\Http\Request;

class HouseholdcomodityController extends Controller
{
    public function index()
    {
        $householdcomodity = Householdcomodity::all();
        return response()->json($householdcomodity, 200);
    }

    public function show(HouseholdComodity $householdcomodity)
    {
        return $householdcomodity;
    }

    public function store(Request $request)
    {
        $householdcomodity = HouseholdComodity::create($request->all());
        return response()->json($householdcomodity, 201);
    }

    public function update(Request $request, Continent $householdcomodity)
    {
        
        $householdcomodity->update($request->all());

        return response()->json($householdcomodity, 200);
    }
}
