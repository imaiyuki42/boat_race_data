<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races_info')->insert([
            [
                'race_info_id' => '1',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-09',
                'race_location' => '児島',
            ],
            [
                'race_info_id' => '2',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-10',
                'race_location' => '児島',
            ],
            [
                'race_info_id' => '3',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-11',
                'race_location' => '児島',
            ],
            [
                'race_info_id' => '4',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-12',
                'race_location' => '児島',
            ],
            [
                'race_info_id' => '5',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-13',
                'race_location' => '児島',
            ],
            [
                'race_info_id' => '6',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-14',
                'race_location' => '児島',
            ],
            [
                'race_info_id' => '7',
                'race_name' => '福岡ダイヤモンドカップ',
                'race_date' => '2022-11-13',
                'race_location' => '福岡',
            ],
            [
                'race_info_id' => '8',
                'race_name' => '福岡ダイヤモンドカップ',
                'race_date' => '2022-11-14',
                'race_location' => '福岡',
            ],
            [
                'race_info_id' => '9',
                'race_name' => '福岡ダイヤモンドカップ',
                'race_date' => '2022-11-15',
                'race_location' => '福岡',
            ],
            [
                'race_info_id' => '10',
                'race_name' => '福岡ダイヤモンドカップ',
                'race_date' => '2022-11-16',
                'race_location' => '福岡',
            ],
            [
                'race_info_id' => '11',
                'race_name' => '福岡ダイヤモンドカップ',
                'race_date' => '2022-11-17',
                'race_location' => '福岡',
            ],
            [
                'race_info_id' => '12',
                'race_name' => '福岡ダイヤモンドカップ',
                'race_date' => '2022-11-18',
                'race_location' => '福岡',
            ],
        ]);
    }
}
