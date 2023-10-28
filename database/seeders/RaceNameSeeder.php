<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $racename_data = [
            [
                'race_name' => 'オールジャパン竹島特別開設６８周年記念競走',
                'start_date' => '2023-06-01',
                'grade' => 'G1',
                'race_location_id' => '7'
            ],
            [
                'race_name' => 'オールジャパン竹島特別開設６７周年記念競走',
                'start_date' => '2022-04-10',
                'grade' => 'G1',
                'race_location_id' => '7'
            ],
            [
                'race_name' => '第67回ボートレースメモリアル',
                'start_date' => '2021-08-24',
                'grade' => 'SG',
                'race_location_id' => '7'
            ]
        ];

        DB::table('race_names')->insert($racename_data);
    }
}
