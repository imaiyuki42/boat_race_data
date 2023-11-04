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
                'first_date' => '2023-06-01',
                'second_date' => '2023-06-02',
                'third_date' => '2023-06-03',
                'fourth_date' => '2023-06-04',
                'fifth_date' => '2023-06-05',
                'sixth_date' => '2023-06-06',
                'grade' => 'G1',
                'race_location_id' => '7'
            ],
            [
                'race_name' => '第70回ボートレースダービー',
                'first_date' => '2023-10-24',
                'second_date' => '2023-10-25',
                'third_date' => '2023-10-26',
                'fourth_date' => '2023-10-27',
                'fifth_date' => '2023-10-28',
                'sixth_date' => '2023-10-29',
                'grade' => 'SG',
                'race_location_id' => '7'
            ],
        ];

        DB::table('race_names')->insert($racename_data);
    }
}
