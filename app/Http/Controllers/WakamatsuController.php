<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakamatsuController extends Controller
{
    public function index()
    {
        return view('wakamatsu');
    }
}
