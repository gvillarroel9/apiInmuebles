<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{

    public function __construct()
    {
        // Solo chequea cliente-id, no tiene que loguearse en el sistema
        //$this->middleware('client.credentials')->only(['index']);
        // chequea usuarios autenticados
        //$this->middleware('auth:api');
    }  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return response()->json($countries, 200);
    }

    public function countryByContinentId($id)
    {
        $countries = Country::where('continentId','=',$id)->get();
        return response()->json($countries, 200); // sin paginacion
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$country = Country::create($request->all());
        //return response()->json($country, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return $country;
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //$country = Country::update($request->all());
        //return response()->json($country, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //$country->delete();
        //return response()->json(null, 204);
    }
}
