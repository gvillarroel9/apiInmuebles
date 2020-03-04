<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zone;

class ZonesController extends Controller
{

    public function index()
    {
        $zone = Zone::all();
        return response()->json($zone, 200);
    }

    public function show(Zone $zone)
    {
        return $zone;
    }
    
}
