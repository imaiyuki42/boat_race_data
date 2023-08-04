<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            [
                'race_id' => '1',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-09',
                'race_location' => '児島',
            ],
            [
                'race_id' => '2',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-10',
                'race_location' => '児島',
            ],
            [
                'race_id' => '3',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-11',
                'race_location' => '児島',
            ],
            [
                'race_id' => '4',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-12',
                'race_location' => '児島',
            ],
            [
                'race_id' => '5',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-13',
                'race_location' => '児島',
            ],
            [
                'race_id' => '6',
                'race_name' => '児島キングカップ開設71周年記念競走',
                'race_date' => '2023-05-14',
                'race_location' => '児島',
            ],
        ]);
    }
}
