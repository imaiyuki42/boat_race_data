<?php

namespace App\Http\Controllers\Locale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RaceName;
use App\Models\RaceResult;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GamagoriController extends Controller
{
    /**蒲郡画面表 */
    public function index()
    {
        // 蒲郡のレース情報をDBから取得
        $race_names = RaceName::where('race_location_id', '7')
            ->select('*')
            ->orderBy('first_date', 'desc')
            ->get();

        return view('locale.gamagori.gamagori', compact('race_names'));
    }

    /**蒲郡詳細画面表 */
    public function detail($race_name_id)
    {
        // 対象の開催情報を取得
        $race_names = $this->raceName($race_name_id);

        $race_name = $race_names->race_name;
        $grade = $race_names->grade;
        $event_date = [
            'first_date' => $race_names->first_date,
            'second_date' => $race_names->second_date,
            'third_date' => $race_names->third_date,
            'fourth_date' => $race_names->fourth_date,
            'fifth_date' => $race_names->fifth_date,
            'sixth_date' => $race_names->sixth_date,
        ];
        $race_name_info = [
            'race_name' => $race_name,
            'grade' => $grade,
            'event_date' => $event_date,
        ];

        // 対象のレース結果のデータを取得
        $race_results = $this->raceResults($race_name, $event_date);

        //対象の全レース数をカウントする
        $race_count_all = $this->raceCountAll($race_name);

        // 1号艇の1着回数を計算する
        $one_boat_one_arrival_count = $this->oneBoatOneArrivalCount($race_name);

        // 2号艇の1回数を計算する
        $two_boat_one_arrival_count = $this->twoBoatOneArrivalCount($race_name);

        // 3号艇の1回数を計算する
        $three_boat_one_arrival_count = $this->threeBoatOneArrivalCount($race_name);

        // 4号艇の1回数を計算する
        $four_boat_one_arrival_count = $this->fourBoatOneArrivalCount($race_name);

        // 5号艇の1回数を計算する
        $five_boat_one_arrival_count = $this->fiveBoatOneArrivalCount($race_name);

        // 6号艇の1回数を計算する
        $six_boat_one_arrival_count = $this->sixBoatOneArrivalCount($race_name);

        // 1号艇の1着率を計算する
        $one_boat_one_arrival = $this->oneBoatOneArrival($one_boat_one_arrival_count, $race_count_all);

        // 2号艇の1着率を計算する
        $two_boat_one_arrival = $this->twoBoatOneArrival($two_boat_one_arrival_count, $race_count_all);

        // 3号艇の1着率を計算する
        $three_boat_one_arrival = $this->threeBoatOneArrival($three_boat_one_arrival_count, $race_count_all);

        // 4号艇の1着率を計算する
        $four_boat_one_arrival = $this->fourBoatOneArrival($four_boat_one_arrival_count, $race_count_all);

        // 5号艇の1着率を計算する
        $five_boat_one_arrival = $this->fiveBoatOneArrival($five_boat_one_arrival_count, $race_count_all);

        // 6号艇の1着率を計算する
        $six_boat_one_arrival = $this->sixBoatOneArrival($six_boat_one_arrival_count, $race_count_all);

        // 1号艇の2着回数を計算する
        $one_boat_two_arrival_count = $this->oneBoatTwoArrivalCount($race_name);

        // 2号艇の2着回数を計算する
        $two_boat_two_arrival_count = $this->twoBoatTwoArrivalCount($race_name);

        // 3号艇の2着回数を計算する
        $three_boat_two_arrival_count = $this->threeBoatTwoArrivalCount($race_name);

        // 4号艇の2着回数を計算する
        $four_boat_two_arrival_count = $this->fourBoatTwoArrivalCount($race_name);

        // 5号艇の2着回数を計算する
        $five_boat_two_arrival_count = $this->fiveBoatTwoArrivalCount($race_name);

        // 6号艇の2着回数を計算する
        $six_boat_two_arrival_count = $this->sixBoatTwoArrivalCount($race_name);

        // 1号艇の2着率を計算する
        $one_boat_two_arrival = $this->oneBoatTwoArrival($one_boat_two_arrival_count, $race_count_all);

        // 2号艇の2着率を計算する
        $two_boat_two_arrival = $this->twoBoatTwoArrival($two_boat_two_arrival_count, $race_count_all);

        // 3号艇の2着率を計算する
        $three_boat_two_arrival = $this->threeBoatTwoArrival($three_boat_two_arrival_count, $race_count_all);

        // 4号艇の2着率を計算する
        $four_boat_two_arrival = $this->fourBoatTwoArrival($four_boat_two_arrival_count, $race_count_all);

        // 5号艇の2着率を計算する
        $five_boat_two_arrival = $this->fiveBoatTwoArrival($five_boat_two_arrival_count, $race_count_all);

        // 6号艇の2着率を計算する
        $six_boat_two_arrival = $this->sixBoatTwoArrival($six_boat_two_arrival_count, $race_count_all);

        // 1号艇の3着回数を計算する
        $one_boat_three_arrival_count = $this->oneBoatThreeArrivalCount($race_name);

        // 2号艇の3着回数を計算する
        $two_boat_three_arrival_count = $this->twoBoatThreeArrivalCount($race_name);

        // 3号艇の3着回数を計算する
        $three_boat_three_arrival_count = $this->threeBoatThreeArrivalCount($race_name);

        // 4号艇の3着回数を計算する
        $four_boat_three_arrival_count = $this->fourBoatThreeArrivalCount($race_name);

        // 5号艇の3着回数を計算する
        $five_boat_three_arrival_count = $this->fiveBoatThreeArrivalCount($race_name);

        // 6号艇の3着回数を計算する
        $six_boat_three_arrival_count = $this->sixBoatThreeArrivalCount($race_name);

        // 1号艇の3着率を計算する
        $one_boat_three_arrival = $this->oneBoatThreeArrival($one_boat_three_arrival_count, $race_count_all);

        // 2号艇の3着率を計算する
        $two_boat_three_arrival = $this->twoBoatThreeArrival($two_boat_three_arrival_count, $race_count_all);

        // 3号艇の3着率を計算する
        $three_boat_three_arrival = $this->threeBoatThreeArrival($three_boat_three_arrival_count, $race_count_all);

        // 4号艇の3着率を計算する
        $four_boat_three_arrival = $this->fourBoatThreeArrival($four_boat_three_arrival_count, $race_count_all);

        // 5号艇の3着率を計算する
        $five_boat_three_arrival = $this->fiveBoatThreeArrival($five_boat_three_arrival_count, $race_count_all);

        // 6号艇の3着率を計算する
        $six_boat_three_arrival = $this->sixBoatThreeArrival($six_boat_three_arrival_count, $race_count_all);

        // 1号艇の2連率を計算する
        $one_boat_two_continuous = $this->oneBoatTwoContinuous($one_boat_one_arrival_count, $one_boat_two_arrival_count, $race_count_all);

        // 2号艇の2連率を計算する
        $two_boat_two_continuous = $this->twoBoatTwoContinuous($two_boat_one_arrival_count, $two_boat_two_arrival_count, $race_count_all);

        // 3号艇の2連率を計算する
        $three_boat_two_continuous = $this->threeBoatTwoContinuous($three_boat_one_arrival_count, $three_boat_two_arrival_count, $race_count_all);

        // 4号艇の2連率を計算する
        $four_boat_two_continuous = $this->fourBoatTwoContinuous($four_boat_one_arrival_count, $four_boat_two_arrival_count, $race_count_all);

        // 5号艇の2連率を計算する
        $five_boat_two_continuous = $this->fiveBoatTwoContinuous($five_boat_one_arrival_count, $five_boat_two_arrival_count, $race_count_all);

        // 6号艇の2連率を計算する
        $six_boat_two_continuous = $this->sixBoatTwoContinuous($six_boat_one_arrival_count, $six_boat_two_arrival_count, $race_count_all);

        // 1号艇の3連率を計算する
        $one_boat_three_continuous = $this->oneBoatThreeContinuous($one_boat_one_arrival_count, $one_boat_two_arrival_count, $one_boat_three_arrival_count, $race_count_all);

        // 2号艇の3連率を計算する
        $two_boat_three_continuous = $this->twoBoatThreeContinuous($two_boat_one_arrival_count, $two_boat_two_arrival_count, $two_boat_three_arrival_count, $race_count_all);

        // 3号艇の3連率を計算する
        $three_boat_three_continuous = $this->threeBoatThreeContinuous($three_boat_one_arrival_count, $three_boat_two_arrival_count, $three_boat_three_arrival_count, $race_count_all);

        // 4号艇の3連率を計算する
        $four_boat_three_continuous = $this->fourBoatThreeContinuous($four_boat_one_arrival_count, $four_boat_two_arrival_count, $four_boat_three_arrival_count, $race_count_all);

        // 5号艇の3連率を計算する
        $five_boat_three_continuous = $this->fiveBoatThreeContinuous($five_boat_one_arrival_count, $five_boat_two_arrival_count, $five_boat_three_arrival_count, $race_count_all);

        // 6号艇の3連率を計算する
        $six_boat_three_continuous = $this->sixBoatThreeContinuous($six_boat_one_arrival_count, $six_boat_two_arrival_count, $six_boat_three_arrival_count, $race_count_all);

        $race_aggregate = [
            'one_boat' => [
                'one_boat_one_arrival_count' => $one_boat_one_arrival_count,
                'one_boat_one_arrival' => $one_boat_one_arrival,
                'one_boat_two_arrival_count' => $one_boat_two_arrival_count,
                'one_boat_two_arrival' => $one_boat_two_arrival,
                'one_boat_three_arrival_count' => $one_boat_three_arrival_count,
                'one_boat_three_arrival' => $one_boat_three_arrival,
                'one_boat_two_continuous' => $one_boat_two_continuous,
                'one_boat_three_continuous' => $one_boat_three_continuous,
            ],
            'two_boat' => [
                'two_boat_one_arrival_count' => $two_boat_one_arrival_count,
                'two_boat_one_arrival' => $two_boat_one_arrival,
                'two_boat_two_arrival_count' => $two_boat_two_arrival_count,
                'two_boat_two_arrival' => $two_boat_two_arrival,
                'two_boat_three_arrival_count' => $two_boat_three_arrival_count,
                'two_boat_three_arrival' => $two_boat_three_arrival,
                'two_boat_two_continuous' => $two_boat_two_continuous,
                'two_boat_three_continuous' => $two_boat_three_continuous,
            ],
            'three_boat' => [
                'three_boat_one_arrival_count' => $three_boat_one_arrival_count,
                'three_boat_one_arrival' => $three_boat_one_arrival,
                'three_boat_two_arrival_count' => $three_boat_two_arrival_count,
                'three_boat_two_arrival' => $three_boat_two_arrival,
                'three_boat_three_arrival_count' => $three_boat_three_arrival_count,
                'three_boat_three_arrival' => $three_boat_three_arrival,
                'three_boat_two_continuous' => $three_boat_two_continuous,
                'three_boat_three_continuous' => $three_boat_three_continuous,
            ],
            'four_boat' => [
                'four_boat_one_arrival_count' => $four_boat_one_arrival_count,
                'four_boat_one_arrival' => $four_boat_one_arrival,
                'four_boat_two_arrival_count' => $four_boat_two_arrival_count,
                'four_boat_two_arrival' => $four_boat_two_arrival,
                'four_boat_three_arrival_count' => $four_boat_three_arrival_count,
                'four_boat_three_arrival' => $four_boat_three_arrival,
                'four_boat_two_continuous' => $four_boat_two_continuous,
                'four_boat_three_continuous' => $four_boat_three_continuous,
            ],
            'five_boat' => [
                'five_boat_one_arrival_count' => $five_boat_one_arrival_count,
                'five_boat_one_arrival' => $five_boat_one_arrival,
                'five_boat_two_arrival_count' => $five_boat_two_arrival_count,
                'five_boat_two_arrival' => $five_boat_two_arrival,
                'five_boat_three_arrival_count' => $five_boat_three_arrival_count,
                'five_boat_three_arrival' => $five_boat_three_arrival,
                'five_boat_two_continuous' => $five_boat_two_continuous,
                'five_boat_three_continuous' => $five_boat_three_continuous,
            ],
            'six_boat' => [
                'six_boat_one_arrival_count' => $six_boat_one_arrival_count,
                'six_boat_one_arrival' => $six_boat_one_arrival,
                'six_boat_two_arrival_count' => $six_boat_two_arrival_count,
                'six_boat_two_arrival' => $six_boat_two_arrival,
                'six_boat_three_arrival_count' => $six_boat_three_arrival_count,
                'six_boat_three_arrival' => $six_boat_three_arrival,
                'six_boat_two_continuous' => $six_boat_two_continuous,
                'six_boat_three_continuous' => $six_boat_three_continuous,
            ],
        ];

        $first_date_results = $race_results['race_results']['first_date'];
        $second_date_results = $race_results['race_results']['second_date'];
        $third_date_results = $race_results['race_results']['third_date'];
        $fourth_date_results = $race_results['race_results']['fourth_date'];
        $fifth_date_results = $race_results['race_results']['fifth_date'];
        $sixth_date_results = $race_results['race_results']['sixth_date'];

        return view('locale.gamagori.gamagori_detail', compact('race_name_info', 'first_date_results', 'second_date_results', 'third_date_results', 'fourth_date_results', 'fifth_date_results', 'sixth_date_results', 'race_aggregate'));
    }

    /**対象の開催情報を取得*/
    private function raceName($race_name_id)
    {
        $race_names = RaceName::find($race_name_id);

        return $race_names;
    }

    /**対象のレース結果のデータを取得*/
    private function raceResults($race_name, $event_date)
    {
        $first_date_results = DB::table('race_results')
            ->join('race_names', 'race_names.race_name', '=', 'race_results.race_name')
            ->where('race_results.race_name', '=', $race_name)
            ->where('race_results.race_date', '=', $event_date['first_date'])
            ->select('race_results.*')
            ->orderBy('race_number', 'asc')
            ->get();

        $second_date_results = DB::table('race_results')
            ->join('race_names', 'race_names.race_name', '=', 'race_results.race_name')
            ->where('race_results.race_name', '=', $race_name)
            ->where('race_results.race_date', '=', $event_date['second_date'])
            ->select('race_results.*')
            ->orderBy('race_number', 'asc')
            ->get();

        $third_date_results = DB::table('race_results')
            ->join('race_names', 'race_names.race_name', '=', 'race_results.race_name')
            ->where('race_results.race_name', '=', $race_name)
            ->where('race_results.race_date', '=', $event_date['third_date'])
            ->select('race_results.*')
            ->orderBy('race_number', 'asc')
            ->get();

        $fourth_date_results = DB::table('race_results')
            ->join('race_names', 'race_names.race_name', '=', 'race_results.race_name')
            ->where('race_results.race_name', '=', $race_name)
            ->where('race_results.race_date', '=', $event_date['fourth_date'])
            ->select('race_results.*')
            ->orderBy('race_number', 'asc')
            ->get();

        $fifth_date_results = DB::table('race_results')
            ->join('race_names', 'race_names.race_name', '=', 'race_results.race_name')
            ->where('race_results.race_name', '=', $race_name)
            ->where('race_results.race_date', '=', $event_date['fifth_date'])
            ->select('race_results.*')
            ->orderBy('race_number', 'asc')
            ->get();

        $sixth_date_results = DB::table('race_results')
            ->join('race_names', 'race_names.race_name', '=', 'race_results.race_name')
            ->where('race_results.race_name', '=', $race_name)
            ->where('race_results.race_date', '=', $event_date['sixth_date'])
            ->select('race_results.*')
            ->orderBy('race_number', 'asc')
            ->get();

        $race_results = [
            'race_results' => [
                'first_date' => $first_date_results,
                'second_date' => $second_date_results,
                'third_date' => $third_date_results,
                'fourth_date' => $fourth_date_results,
                'fifth_date' => $fifth_date_results,
                'sixth_date' => $sixth_date_results,
            ]
        ];

        return $race_results;
    }

    /**対象の全レース数をカウント */
    private function raceCountAll($race_name)
    {
        $race_count_all = RaceResult::where('race_name', $race_name)
            ->count();

        return $race_count_all;
    }

    /**1号艇の1着回数を計算する */
    private function oneBoatOneArrivalCount($race_name)
    {
        // 1号艇が1着の数をカウント
        $one_boat_one_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_first', 1)
            ->count();

        return $one_boat_one_arrival_count;
    }

    /**2号艇の1着回数を計算する */
    private function twoBoatOneArrivalCount($race_name)
    {
        // 2号艇が1着の数をカウント
        $two_boat_one_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_first', 2)
            ->count();

        return $two_boat_one_arrival_count;
    }

    /**3号艇の1着回数を計算する */
    private function threeBoatOneArrivalCount($race_name)
    {
        // 3号艇が1着の数をカウント
        $three_boat_one_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_first', 3)
            ->count();

        return $three_boat_one_arrival_count;
    }

    /**4号艇の1着回数を計算する */
    private function fourBoatOneArrivalCount($race_name)
    {
        // 4号艇が1着の数をカウント
        $four_boat_one_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_first', 4)
            ->count();

        return $four_boat_one_arrival_count;
    }

    /**5号艇の1着回数を計算する */
    private function fiveBoatOneArrivalCount($race_name)
    {
        // 5号艇が1着の数をカウント
        $five_boat_one_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_first', 5)
            ->count();

        return $five_boat_one_arrival_count;
    }


    /**6号艇の1着回数を計算する */
    private function sixBoatOneArrivalCount($race_name)
    {
        // 6号艇が1着の数をカウント
        $six_boat_one_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_first', 6)
            ->count();

        return $six_boat_one_arrival_count;
    }

    /**1号艇の1着率を計算する */
    private function oneBoatOneArrival($one_boat_one_arrival_count, $race_count_all)
    {
        // 1着率(1着数/全レース)
        $one_boat_one_arrival =  number_format(($one_boat_one_arrival_count / $race_count_all) * 100, 1);

        return $one_boat_one_arrival;
    }

    /**2号艇の1着率を計算する */
    private function twoBoatOneArrival($two_boat_one_arrival_count, $race_count_all)
    {
        // 1着率(1着数/全レース)
        $two_boat_one_arrival =  number_format(($two_boat_one_arrival_count / $race_count_all) * 100, 1);

        return $two_boat_one_arrival;
    }

    /**3号艇の1着率を計算する */
    private function threeBoatOneArrival($three_boat_one_arrival_count, $race_count_all)
    {
        // 1着率(1着数/全レース)
        $three_boat_one_arrival =  number_format(($three_boat_one_arrival_count / $race_count_all) * 100, 1);

        return $three_boat_one_arrival;
    }

    /**4号艇の1着率を計算する */
    private function fourBoatOneArrival($four_boat_one_arrival_count, $race_count_all)
    {
        // 1着率(1着数/全レース)
        $four_boat_one_arrival =  number_format(($four_boat_one_arrival_count / $race_count_all) * 100, 1);

        return $four_boat_one_arrival;
    }

    /**5号艇の1着率を計算する */
    private function fiveBoatOneArrival($five_boat_one_arrival_count, $race_count_all)
    {
        // 1着率(1着数/全レース)
        $five_boat_one_arrival =  number_format(($five_boat_one_arrival_count / $race_count_all) * 100, 1);

        return $five_boat_one_arrival;
    }

    /**6号艇の1着率を計算する */
    private function sixBoatOneArrival($six_boat_one_arrival_count, $race_count_all)
    {
        // 1着率(1着数/全レース)
        $six_boat_one_arrival =  number_format(($six_boat_one_arrival_count / $race_count_all) * 100, 1);

        return $six_boat_one_arrival;
    }

    /**1号艇の2着回数を計算する */
    private function oneBoatTwoArrivalCount($race_name)
    {
        // 1号艇が2着の数をカウント
        $one_boat_two_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_second', 1)
            ->count();

        return $one_boat_two_arrival_count;
    }

    /**2号艇の2着回数を計算する */
    private function twoBoatTwoArrivalCount($race_name)
    {
        // 2号艇が2着の数をカウント
        $two_boat_two_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_second', 2)
            ->count();

        return $two_boat_two_arrival_count;
    }

    /**3号艇の2着回数を計算する */
    private function threeBoatTwoArrivalCount($race_name)
    {
        // 3号艇が2着の数をカウント
        $three_boat_two_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_second', 3)
            ->count();

        return $three_boat_two_arrival_count;
    }

    /**4号艇の2着回数を計算する */
    private function fourBoatTwoArrivalCount($race_name)
    {
        // 4号艇が2着の数をカウント
        $four_boat_two_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_second', 4)
            ->count();

        return $four_boat_two_arrival_count;
    }

    /**5号艇の2着回数を計算する */
    private function fiveBoatTwoArrivalCount($race_name)
    {
        // 5号艇が2着の数をカウント
        $five_boat_two_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_second', 5)
            ->count();

        return $five_boat_two_arrival_count;
    }

    /**6号艇の2着回数を計算する */
    private function sixBoatTwoArrivalCount($race_name)
    {
        // 6号艇が2着の数をカウント
        $six_boat_two_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_second', 6)
            ->count();

        return $six_boat_two_arrival_count;
    }

    /**1号艇の2着率を計算する */
    private function oneBoatTwoArrival($one_boat_two_arrival_count, $race_count_all)
    {
        // 2着率(2着数/全レース)
        $one_boat_two_arrival =  number_format(($one_boat_two_arrival_count / $race_count_all) * 100, 1);

        return $one_boat_two_arrival;
    }

    /**2号艇の2着率を計算する */
    private function twoBoatTwoArrival($two_boat_two_arrival_count, $race_count_all)
    {
        // 2着率(2着数/全レース)
        $two_boat_two_arrival =  number_format(($two_boat_two_arrival_count / $race_count_all) * 100, 1);

        return $two_boat_two_arrival;
    }

    /**3号艇の2着率を計算する */
    private function threeBoatTwoArrival($three_boat_two_arrival_count, $race_count_all)
    {
        // 2着率(2着数/全レース)
        $three_boat_two_arrival =  number_format(($three_boat_two_arrival_count / $race_count_all) * 100, 1);

        return $three_boat_two_arrival;
    }

    /**4号艇の2着率を計算する */
    private function fourBoatTwoArrival($four_boat_two_arrival_count, $race_count_all)
    {
        // 2着率(2着数/全レース)
        $four_boat_two_arrival =  number_format(($four_boat_two_arrival_count / $race_count_all) * 100, 1);

        return $four_boat_two_arrival;
    }

    /**5号艇の2着率を計算する */
    private function fiveBoatTwoArrival($five_boat_two_arrival_count, $race_count_all)
    {
        // 2着率(2着数/全レース)
        $five_boat_two_arrival =  number_format(($five_boat_two_arrival_count / $race_count_all) * 100, 1);

        return $five_boat_two_arrival;
    }


    /**6号艇の2着率を計算する */
    private function sixBoatTwoArrival($six_boat_two_arrival_count, $race_count_all)
    {
        // 2着率(2着数/全レース)
        $six_boat_two_arrival =  number_format(($six_boat_two_arrival_count / $race_count_all) * 100, 1);

        return $six_boat_two_arrival;
    }

    /**1号艇の3着回数を計算する */
    private function oneBoatThreeArrivalCount($race_name)
    {
        // 1号艇が3着の数をカウント
        $one_boat_three_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_third', 1)
            ->count();

        return $one_boat_three_arrival_count;
    }

    /**2号艇の3着回数を計算する */
    private function twoBoatThreeArrivalCount($race_name)
    {
        // 2号艇が3着の数をカウント
        $two_boat_three_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_third', 2)
            ->count();

        return $two_boat_three_arrival_count;
    }

    /**3号艇の3着回数を計算する */
    private function threeBoatThreeArrivalCount($race_name)
    {
        // 3号艇が3着の数をカウント
        $three_boat_three_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_third', 3)
            ->count();

        return $three_boat_three_arrival_count;
    }

    /**4号艇の3着回数を計算する */
    private function fourBoatThreeArrivalCount($race_name)
    {
        // 4号艇が3着の数をカウント
        $four_boat_three_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_third', 4)
            ->count();

        return $four_boat_three_arrival_count;
    }

    /**5号艇の3着回数を計算する */
    private function fiveBoatThreeArrivalCount($race_name)
    {
        // 5号艇が3着の数をカウント
        $five_boat_three_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_third', 5)
            ->count();

        return $five_boat_three_arrival_count;
    }

    /**6号艇の3着回数を計算する */
    private function sixBoatThreeArrivalCount($race_name)
    {
        // 6号艇が3着の数をカウント
        $six_boat_three_arrival_count = RaceResult::where('race_name', $race_name)
            ->where('trifecta_third', 6)
            ->count();

        return $six_boat_three_arrival_count;
    }

    /**1号艇の3着率を計算する */
    private function oneBoatThreeArrival($one_boat_three_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $one_boat_three_arrival =  number_format(($one_boat_three_arrival_count / $race_count_all) * 100, 1);

        return $one_boat_three_arrival;
    }

    /**2号艇の3着率を計算する */
    private function twoBoatThreeArrival($two_boat_three_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $two_boat_three_arrival =  number_format(($two_boat_three_arrival_count / $race_count_all) * 100, 1);

        return $two_boat_three_arrival;
    }

    /**3号艇の3着率を計算する */
    private function threeBoatThreeArrival($three_boat_three_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $three_boat_three_arrival =  number_format(($three_boat_three_arrival_count / $race_count_all) * 100, 1);

        return $three_boat_three_arrival;
    }

    /**4号艇の3着率を計算する */
    private function fourBoatThreeArrival($four_boat_three_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $four_boat_three_arrival =  number_format(($four_boat_three_arrival_count / $race_count_all) * 100, 1);

        return $four_boat_three_arrival;
    }

    /**5号艇の3着率を計算する */
    private function fiveBoatThreeArrival($five_boat_three_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $five_boat_three_arrival =  number_format(($five_boat_three_arrival_count / $race_count_all) * 100, 1);

        return $five_boat_three_arrival;
    }

    /**6号艇の3着率を計算する */
    private function sixBoatThreeArrival($six_boat_three_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $six_boat_three_arrival =  number_format(($six_boat_three_arrival_count / $race_count_all) * 100, 1);

        return $six_boat_three_arrival;
    }

    /**1号艇の2連率を計算する */
    private function oneBoatTwoContinuous($one_boat_one_arrival_count, $one_boat_two_arrival_count, $race_count_all)
    {
        // 2連率((1着数 + 2着数)/全レース)
        $one_boat_two_continuous =  number_format((($one_boat_one_arrival_count + $one_boat_two_arrival_count) / $race_count_all) * 100, 1);

        return $one_boat_two_continuous;
    }

    /**2号艇の2連率を計算する */
    private function twoBoatTwoContinuous($two_boat_one_arrival_count, $two_boat_two_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $two_boat_two_continuous =  number_format((($two_boat_one_arrival_count + $two_boat_two_arrival_count) / $race_count_all) * 100, 1);

        return $two_boat_two_continuous;
    }

    /**3号艇の2連率を計算する */
    private function threeBoatTwoContinuous($three_boat_one_arrival_count, $three_boat_two_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $three_boat_two_continuous =  number_format((($three_boat_one_arrival_count + $three_boat_two_arrival_count) / $race_count_all) * 100, 1);

        return $three_boat_two_continuous;
    }

    /**4号艇の2連率を計算する */
    private function fourBoatTwoContinuous($four_boat_one_arrival_count, $four_boat_two_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $four_boat_two_continuous =  number_format((($four_boat_one_arrival_count + $four_boat_two_arrival_count) / $race_count_all) * 100, 1);

        return $four_boat_two_continuous;
    }

    /**5号艇の2連率を計算する */
    private function fiveBoatTwoContinuous($five_boat_one_arrival_count, $five_boat_two_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $five_boat_two_continuous =  number_format((($five_boat_one_arrival_count + $five_boat_two_arrival_count) / $race_count_all) * 100, 1);

        return $five_boat_two_continuous;
    }

    /**6号艇の2連率を計算する */
    private function sixBoatTwoContinuous($six_boat_one_arrival_count, $six_boat_two_arrival_count, $race_count_all)
    {
        // 3着率(3着数/全レース)
        $six_boat_two_continuous =  number_format((($six_boat_one_arrival_count + $six_boat_two_arrival_count) / $race_count_all) * 100, 1);

        return $six_boat_two_continuous;
    }

    /**1号艇の3連率を計算する */
    private function oneBoatThreeContinuous($one_boat_one_arrival_count, $one_boat_two_arrival_count, $one_boat_three_arrival_count, $race_count_all)
    {
        // 3連率((1着数 + 2着数 + 3着数)/全レース)
        $one_boat_three_continuous =  number_format((($one_boat_one_arrival_count + $one_boat_two_arrival_count + $one_boat_three_arrival_count) / $race_count_all) * 100, 1);

        return $one_boat_three_continuous;
    }

    /**2号艇の3連率を計算する */
    private function twoBoatThreeContinuous($two_boat_one_arrival_count, $two_boat_two_arrival_count, $two_boat_three_arrival_count, $race_count_all)
    {
        // 3連率((1着数 + 2着数 + 3着数)/全レース)
        $two_boat_three_continuous =  number_format((($two_boat_one_arrival_count + $two_boat_two_arrival_count + $two_boat_three_arrival_count) / $race_count_all) * 100, 1);

        return $two_boat_three_continuous;
    }

    /**3号艇の3連率を計算する */
    private function threeBoatThreeContinuous($three_boat_one_arrival_count, $three_boat_two_arrival_count, $three_boat_three_arrival_count, $race_count_all)
    {
        // 3連率((1着数 + 2着数 + 3着数)/全レース)
        $three_boat_three_continuous =  number_format((($three_boat_one_arrival_count + $three_boat_two_arrival_count + $three_boat_three_arrival_count) / $race_count_all) * 100, 1);

        return $three_boat_three_continuous;
    }

    /**4号艇の3連率を計算する */
    private function fourBoatThreeContinuous($four_boat_one_arrival_count, $four_boat_two_arrival_count, $four_boat_three_arrival_count, $race_count_all)
    {
        // 3連率((1着数 + 2着数 + 3着数)/全レース)
        $four_boat_three_continuous =  number_format((($four_boat_one_arrival_count + $four_boat_two_arrival_count + $four_boat_three_arrival_count) / $race_count_all) * 100, 1);

        return $four_boat_three_continuous;
    }

    /**5号艇の3連率を計算する */
    private function fiveBoatThreeContinuous($five_boat_one_arrival_count, $five_boat_two_arrival_count, $five_boat_three_arrival_count, $race_count_all)
    {
        // 3連率((1着数 + 2着数 + 3着数)/全レース)
        $five_boat_three_continuous =  number_format((($five_boat_one_arrival_count + $five_boat_two_arrival_count + $five_boat_three_arrival_count) / $race_count_all) * 100, 1);

        return $five_boat_three_continuous;
    }

    /**6号艇の3連率を計算する */
    private function sixBoatThreeContinuous($six_boat_one_arrival_count, $six_boat_two_arrival_count, $six_boat_three_arrival_count, $race_count_all)
    {
        // 3連率((1着数 + 2着数 + 3着数)/全レース)
        $six_boat_three_continuous =  number_format((($six_boat_one_arrival_count + $six_boat_two_arrival_count + $six_boat_three_arrival_count) / $race_count_all) * 100, 1);

        return $six_boat_three_continuous;
    }

    /**開催期間の日時を取得する */
    public function raceDate($start_date)
    {
        $race_date = [];
        // 指定の日付をCarbonオブジェクトに変換
        $startDate = Carbon::parse($start_date);

        for ($i = 0; $i < 6; $i++) {
            // Carbonオブジェクトを日付文字列に変換して配列に追加
            $race_date[] = $startDate->toDateString();
            // 日付を1日進める
            $startDate->addDay();
        }

        return $race_date;
    }
}
