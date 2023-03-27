<?php

namespace Database\Seeders;

use App\Models\MasterCity;
use App\Models\MasterProvince;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $province = [
            [
                'name' => 'Banten'
            ],
            [
                'name' => 'DKI Jakarta'
            ]
        ];

        $city = [
            [
                'name' => 'Kota Tangerang',
                'province_id' => 1
            ],
            [
                'name' => 'Tangerang Selatan',
                'province_id' => 1
            ],
            [
                'name' => 'Jakarta Barat',
                'province_id' => 2
            ],
            [
                'name' => 'Jakarta Pusat',
                'province_id' => 2
            ],
            [
                'name' => 'Jakarta Selatan',
                'province_id' => 2
            ],
            [
                'name' => 'Jakarta Timur',
                'province_id' => 2
            ]
        ];

        foreach ($province as $key => $value) {
            MasterProvince::create($value);
        }

        foreach ($city as $key => $value) {
            MasterCity::create($value);
        }
    }
}
