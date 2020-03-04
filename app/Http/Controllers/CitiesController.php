<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{
    public function index()
    {
        $city = City::all();
        return response()->json($city, 200);
    }

    public function show(City $city)
    {
        return $city;
    }
}