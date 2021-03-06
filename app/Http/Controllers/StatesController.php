<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{

    public function __construct()
    {
        // chequea usuarios autenticados
        //$this->middleware('auth:api');
    }  

    public function index()
    {
        $state = State::all();
        return response()->json($state, 200);
    }

    public function show(State $state)
    {
        return $state;
    }

    public function stateByCountryId($id)
    {
        $states = State::where('countryId','=',$id)->get();
        return response()->json($states, 200); // sin paginacion
    }
    
}
