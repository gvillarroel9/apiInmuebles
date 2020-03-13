<?php

namespace App\Http\Controllers;

use App\DaysContactHousehold;
use Illuminate\Http\Request;

class DaysContactHouseholdController extends Controller
{
    public function index()
    {
        $dayscontacthousehold = DaysContactHousehold::all();
        return response()->json($dayscontacthousehold, 200);
    }

    public function show(DaysContactHousehold $dayscontacthousehold)
    {
        return $dayscontacthousehold;
    }

    public function store(Request $request)
    {
        $dayscontacthousehold = DaysContactHousehold::create($request->all());
        return response()->json($dayscontacthousehold, 201);
    }

    public function update(Request $request, Continent $dayscontacthousehold)
    {
        
        $dayscontacthousehold->update($request->all());

        return response()->json($dayscontacthousehold, 200);
    }
}
