<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RaceName;

class RaceNameCreateController extends Controller
{
    public function index()
    {
        $race_locations = [
            '1' => '桐生', '2' =>'戸田', '3' =>'江戸川', '4' =>'平和島', '5' =>'多摩川', '6' =>'浜名湖',
            '7' => '蒲郡', '8' =>'常滑', '9' =>'津', '10' =>'三国', '11' =>'びわこ', '12' =>'住之江',
            '13' => '尼崎', '14' =>'鳴門', '15' =>'丸亀', '16' =>'児島', '17' =>'宮島', '18' =>'徳山',
            '19' => '下関', '20' =>'若松', '21' =>'芦屋', '22' =>'福岡', '23' =>'唐津', '24' =>'大村'
        ];

        return view('racename_create', compact('race_locations'));
    }

    public function store(Request $request)
    {
        RaceName::create([
            'race_name' => $request->race_name,
            'race_location_id' => $request->race_location,
        ]);

       return redirect()->route('home.index');
    }
}
