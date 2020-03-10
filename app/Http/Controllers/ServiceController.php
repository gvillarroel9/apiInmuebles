<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return response()->json($service, 200);
    }

    public function show(Service $service)
    {
        return $service;
    }
}
