<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Household;

class HouseholdController extends Controller
{
    public function __construct()
    {
        // chequea usuarios autenticados
        //$this->middleware('auth:api');
    }  
    
    public function index()
    {
        $household = Household::all();
        return response()->json($household, 200);
    }

   
    public function store(Request $request)
    {
        $household = Household::create($request->all());
        return response()->json($household, 201);
    }

  
    public function show(Household $household)
    {
        return $household;
    }    
   
    public function update(Request $request, $id)
    {
        $household = Household::where('id', $id)->update($request->all());
        return response()->json($household, 201);
    }

    public function destroy(Household $household)
    {
        $household->delete();
        return response()->json(null, 204);
    }
}
