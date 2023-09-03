<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiwakoController extends Controller
{
    public function index()
    {
        return view('biwako');
    }
}
