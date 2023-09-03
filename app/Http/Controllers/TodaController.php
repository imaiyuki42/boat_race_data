<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodaController extends Controller
{
    public function index()
    {
        return view('toda');
    }
}
