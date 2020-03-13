<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index()
    {
        $currency = Currency::all();
        return response()->json($currency, 200);
    }

    public function show(Currency $currency)
    {
        return $currency;
    }
}
