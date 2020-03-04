<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Continent;

class ContinentsController extends Controller
{
    public function __construct()
    {
        // chequea usuarios autenticados
        //$this->middleware('auth:api');
    }      

    public function index()
    {
        $continent = Continent::all();
        return response()->json($continent, 200);
    }

    public function show(Continent $Continent)
    {
        return $Continent;
    }

    public function store(Request $request)
    {
        $Continent = Continent::create($request->all());
        return response()->json($Continent, 201);
    }

    public function update(Request $request, Continent $Continent)
    {
        
        $Continent->update($request->all());

        return response()->json($Continent, 200);
    }

    public function delete(Continent $Continent)
    {
        $Continent->delete();
        return response()->json(null, 204);
    }



}
