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
}
