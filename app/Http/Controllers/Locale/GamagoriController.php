<?php

namespace App\Http\Controllers\Locale;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RaceName;
use App\Models\RaceResult;
use Carbon\Carbon;

class GamagoriController extends Controller
{
    /**蒲郡画面表 */
    public function index()
    {
        // 開催情報を取得
        $race_names = $this->raceName();

        // オールジャパン竹島特別開設６８周年記念競走に必要なデータの取得
        $race_results = $this->raceResults();

        return view('locale.gamagori', compact('race_names', 'race_results'));
    }

    /**開催情報を取得*/
    private function raceName()
    {
        $race_names = RaceName::where('race_location_id', '7')
            ->where('race_name', 'オールジャパン竹島特別開設６８周年記念競走')
            ->first();

        return $race_names;
    }

    /**オールジャパン竹島特別開設６８周年記念競走に必要なデータの取得*/
    private function raceResults()
    {
        // 初日のレース結果をDBから取得
        $results_all = RaceName::join('race_results', function ($join) {
            $join->on('race_results.race_name', 'race_names.race_name');
            $join->on('race_results.race_date', 'race_names.race_date');
        })
            ->select('race_results.*')
            ->orderBy('race_results.race_number', 'asc')
            ->get();


        // $results_first_day = RaceResult::join('race_names', 'race_names.race_name', 'race_results.race_name')
        //     ->where('race_names.race_date', 'race_results.race_date')
        //     ->orderBy('race_number', 'asc')
        //     ->get();

        // $results_second_day = RaceResult::where('race_date', $race_date[1])
        //     ->where('race_name', $race_name)
        //     ->orderBy('race_number', 'asc')
        //     ->get();

        // $results_third_day = RaceResult::where('race_date', $race_date[2])
        //     ->where('race_name', $race_name)
        //     ->orderBy('race_number', 'asc')
        //     ->get();

        // $results_fourth_day = RaceResult::where('race_date', $race_date[3])
        //     ->where('race_name', $race_name)
        //     ->orderBy('race_number', 'asc')
        //     ->get();

        // $results_fifth_day = RaceResult::where('race_date', $race_date[4])
        //     ->where('race_name', $race_name)
        //     ->orderBy('race_number', 'asc')
        //     ->get();

        // $results_sixth_day = RaceResult::where('race_date', $race_date[5])
        //     ->where('race_name', $race_name)
        //     ->orderBy('race_number', 'asc')
        //     ->get();

        // $race_info = [
        //     'race_results' => [
        //         'first_day' => $results_first_day,
        //         'second_day' => $results_second_day,
        //         'third_day' => $results_third_day,
        //         'fourth_day' => $results_fourth_day,
        //         'fifth_day' => $results_fifth_day,
        //         'sixth_day' => $results_sixth_day,
        //     ]
        // ];

        // return $race_info;
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
