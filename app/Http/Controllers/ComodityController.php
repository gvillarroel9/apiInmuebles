<?php

namespace App\Http\Controllers;
use App\Comodity;
use Illuminate\Http\Request;

class ComodityController extends Controller
{
    public function index()
    {
        $comodity = Comodity::all();
        return response()->json($comodity, 200);
    }

    public function show(Comodity $comodity)
    {
        return $comodity;
    }
}
