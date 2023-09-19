<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location_data = [
            [
                'race_location_id' => '1',
                'race_location_name' => '桐生',
            ],
            [
                'race_location_id' => '2',
                'race_location_name' => '戸田',
            ],
            [
                'race_location_id' => '3',
                'race_location_name' => '江戸川',
            ],
            [
                'race_location_id' => '4',
                'race_location_name' => '平和島',
            ],
            [
                'race_location_id' => '5',
                'race_location_name' => '多摩川',
            ],
            [
                'race_location_id' => '6',
                'race_location_name' => '浜名湖',
            ],
            [
                'race_location_id' => '7',
                'race_location_name' => '蒲郡',
            ],
            [
                'race_location_id' => '8',
                'race_location_name' => '常滑',
            ],
            [
                'race_location_id' => '9',
                'race_location_name' => '津',
            ],
            [
                'race_location_id' => '10',
                'race_location_name' => '三国',
            ],
            [
                'race_location_id' => '11',
                'race_location_name' => 'びわこ',
            ],
            [
                'race_location_id' => '12',
                'race_location_name' => '住之江',
            ],
            [
                'race_location_id' => '13',
                'race_location_name' => '尼崎',
            ],
            [
                'race_location_id' => '14',
                'race_location_name' => '鳴門',
            ],
            [
                'race_location_id' => '15',
                'race_location_name' => '丸亀',
            ],
            [
                'race_location_id' => '16',
                'race_location_name' => '児島',
            ],
            [
                'race_location_id' => '17',
                'race_location_name' => '宮島',
            ],
            [
                'race_location_id' => '18',
                'race_location_name' => '徳山',
            ],
            [
                'race_location_id' => '19',
                'race_location_name' => '下関',
            ],
            [
                'race_location_id' => '20',
                'race_location_name' => '若松',
            ],
            [
                'race_location_id' => '21',
                'race_location_name' => '芦屋',
            ],
            [
                'race_location_id' => '22',
                'race_location_name' => '福岡',
            ],
            [
                'race_location_id' => '23',
                'race_location_name' => '唐津',
            ],
            [
                'race_location_id' => '24',
                'race_location_name' => '大村',
            ],
        ];

        DB::table('race_locations')->insert($location_data);
    }
}
