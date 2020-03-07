<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactmethod;

class ContactmethodController extends Controller
{
    public function index()
    {
        $contactmethod = Contactmethod::all();
        return response()->json($contactmethod, 200);
    }

    public function show(Contactmethod $contactmethod)
    {
        return $contactmethod;
    }

    public function store(Request $request)
    {
        $contactmethod = Contactmethod::create($request->all());
        return response()->json($contactmethod, 201);
    }

    public function update(Request $request, contactmethod $contactmethod)
    {
        
        $contactmethod->update($request->all());

        return response()->json($contactmethod, 200);
    }

    public function delete(Contactmethod $contactmethod)
    {
        $contactmethod->delete();
        return response()->json(null, 204);
    }

}
