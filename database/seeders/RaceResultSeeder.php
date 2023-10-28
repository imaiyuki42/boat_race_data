<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $race_result_data = [
            [
                'race_date' => '2023-06-01',
                'race_number' => '1',
                'race_location_id' => '7',
                'exacta_first' => '2',
                'exacta_second' => '3',
                'exacta_refund_price' => '2060',
                'exacta_rank' => '6',
                'trifecta_first' => '2',
                'trifecta_second' => '3',
                'trifecta_third' => '5',
                'trifecta_refund_price' => '12590',
                'trifecta_rank' => '49',
            ],
            [
                'race_date' => '2023-06-02',
                'race_number' => '2',
                'race_location_id' => '7',
                'exacta_first' => '1',
                'exacta_second' => '2',
                'exacta_refund_price' => '380',
                'exacta_rank' => '1',
                'trifecta_first' => '1',
                'trifecta_second' => '2',
                'trifecta_third' => '3',
                'trifecta_refund_price' => '1200',
                'trifecta_rank' => '2',
            ]
        ];

        DB::table('race_results')->insert($race_result_data);

    }
}
