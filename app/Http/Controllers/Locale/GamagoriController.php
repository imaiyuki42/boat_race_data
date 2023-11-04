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
        // 対象のレース結果のデータを取得
        $race_results = $this->raceResults($race_name, $event_date);

        $race_name_info = [
            'race_name' => $race_name,
            'grade' => $grade,
            'event_date' => $event_date,
        ];

        return view('locale.gamagori.gamagori_detail', compact('race_name_info', 'race_results'));
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
