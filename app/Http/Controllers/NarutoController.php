<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NarutoController extends Controller
{
    public function index()
    {
        return view('naruto');
    }
}
