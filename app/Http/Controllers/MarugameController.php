<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarugameController extends Controller
{
    public function index()
    {
        return view('marugame');
    }
}
