<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TokuyamaController extends Controller
{
    public function index()
    {
        return view('tokuyama');
    }
}
