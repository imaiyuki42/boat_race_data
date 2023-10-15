<?php

namespace App\Http\Controllers\Locale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TodaController extends Controller
{
    public function index()
    {
        return view('locale.toda');
    }
}
