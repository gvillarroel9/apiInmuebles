<?php

namespace App\Http\Controllers;

use App\ContactDays;
use Illuminate\Http\Request;

class ContactDaysController extends Controller
{
    public function index()
    {
        $contactdays = ContactDays::all();
        return response()->json($contactdays, 200);
    }

    public function show(ContactDays $contactdays)
    {
        return $contactdays;
    }
}
