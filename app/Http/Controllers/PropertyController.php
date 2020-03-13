<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $property = Property::all();
        return response()->json($property, 200);
    }

    public function show(Property $property)
    {
        return $property;
    }
}
