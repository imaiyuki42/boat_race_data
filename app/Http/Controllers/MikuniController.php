<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MikuniController extends Controller
{
    public function index()
    {
        return view('mikuni');
    }
}
