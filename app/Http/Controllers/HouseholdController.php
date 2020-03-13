<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Household;

class HouseholdController extends Controller
{
    public function index()
    {
        $household = Household::all();
        return response()->json($household, 200);
    }

    public function show(Household $household)
    {
        return $household;
    }

    public function store(Request $request)
    {
        $household = Household::create($request->all());
        return response()->json($household, 201);
    }
    
    public function createHousehold(Request $request)
    {
        $request->validate([
            'propertyType' => 'required|integer',
            'householdin' => 'required|integer',
            'zoneId' => 'required|integer',
            'roomsNumber' => 'required|integer',
            'bathroomsNumber' => 'required|integer',
            'parkingNumbers' => 'required|integer',
            'details' => 'required|string',
            'proximityServicesTransport'  => 'required|string',
            'location' => 'required|string',
            'price' => 'required|integer',
            'idCurrency' => 'required|integer',
            'initHour' => 'required|integer',
            'finishHour' => 'required|integer'
        ]);

        $user = new Household([
        'propertyType' => $request->propertyType,
        'householdin' => $request->householdin,
        'zoneId' => $request->zoneId,
        'roomsNumber' => $request->roomsNumber,
        'bathroomsNumber' => $request->bathroomsNumber,
        'parkingNumbers' => $request->parkingNumbers,
        'details' => $request->details,
        'proximityServicesTransport' => $request->proximityServicesTransport,
        'location' => $request->location,
        'price' => $request->price,
        'idCurrency' => $request->idCurrency,
        'initHour'=> $request->initHour,
        'finishHour'=> $request->finishHour
        ]);       

        $user->save();
        return response()->json([
            'message' => 'Successfully created household!'], 201);
    }
    
    public function update(Request $request, Continent $household)
    {
        
        $household->update($request->all());

        return response()->json($household, 200);
    }

    public function delete(Household $household)
    {
        $household->delete();
        return response()->json(null, 204);
    }
}
