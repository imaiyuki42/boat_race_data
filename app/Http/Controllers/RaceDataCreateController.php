<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RaceResult;
use App\Http\Requests\StoreDataCreateRequest;

class RaceDataCreateController extends Controller
{
    /**レースデータ登録画面表示 */
    public function index()
    {
        $race_locations = [
            '1' => '桐生', '2' =>'戸田', '3' =>'江戸川', '4' =>'平和島', '5' =>'多摩川', '6' =>'浜名湖',
            '7' => '蒲郡', '8' =>'常滑', '9' =>'津', '10' =>'三国', '11' =>'びわこ', '12' =>'住之江',
            '13' => '尼崎', '14' =>'鳴門', '15' =>'丸亀', '16' =>'児島', '17' =>'宮島', '18' =>'徳山',
            '19' => '下関', '20' =>'若松', '21' =>'芦屋', '22' =>'福岡', '23' =>'唐津', '24' =>'大村'
        ];

        return view('racedata_create', compact('race_locations'));
    }

    /**入力したレースデータをデータベースに保存 */
    public function store(StoreDataCreateRequest $request)
    {
        RaceResult::create([
            'race_date' => $request->race_date,
            'race_number' => $request->race_number,
            'race_location_id' => $request->race_location,
            'exacta_first' => $request->exacta_first,
            'exacta_second' => $request->exacta_second,
            'exacta_refund_price' => $request->exacta_refund_price,
            'exacta_rank' => $request->exacta_rank,
            'trifecta_first' => $request->trifecta_first,
            'trifecta_second' => $request->trifecta_second,
            'trifecta_third' => $request->trifecta_third,
            'trifecta_refund_price' => $request->trifecta_refund_price,
            'trifecta_rank' => $request->trifecta_rank,
        ]);

       return redirect()->route('home.index');
    }
}
