<?php

namespace App\Http\Controllers\Locale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NarutoController extends Controller
{
    public function index()
    {
        return view('locale.naruto');
    }
}
