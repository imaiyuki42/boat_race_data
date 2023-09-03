<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaratsuController extends Controller
{
    public function index()
    {
        return view('karatsu');
    }
}
