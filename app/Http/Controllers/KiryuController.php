<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KiryuController extends Controller
{
    public function index()
    {
        return view('kiryu');
    }
}
