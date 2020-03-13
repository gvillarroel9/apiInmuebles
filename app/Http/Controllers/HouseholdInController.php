<?php

namespace App\Http\Controllers;

use App\HouseholdIn;
use Illuminate\Http\Request;

class HouseholdInController extends Controller
{
    public function index()
    {
        $householdIn = HouseholdIn::all();
        return response()->json($householdIn, 200);
    }

    public function show(HouseholdIn $householdIn)
    {
        return $householdIn;
    }
}
