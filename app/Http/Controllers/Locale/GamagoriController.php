<?php

namespace App\Http\Controllers\Locale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RaceName;
use App\Models\RaceResult;

class GamagoriController extends Controller
{
    /**蒲郡画面表 */
    public function index()
    {
        $race_name = RaceName::where('race_location_id','=', '7')
                        ->select('race_name')
                        ->first();

        return view('locale.gamagori',compact('race_name'));
    }
}
