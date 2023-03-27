<?php

namespace Database\Seeders;

use App\Models\MasterUnit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterUnitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unit = [
            [
                'name' => 'Rumah',
                'slug' => 'rumah',
                'type' => 'rumah',
                'description' => 'Rumah',
            ],
            [
                'name' => 'Apartemen',
                'slug' => 'apartemen',
                'type' => 'apartemen',
                'description' => 'Apartemen',
            ],
            [
                'name' => 'Ruko',
                'slug' => 'ruko',
                'type' => 'ruko',
                'description' => 'Ruko',
            ],
            [
                'name' => 'Tanah',
                'slug' => 'tanah',
                'type' => 'tanah',
                'description' => 'Tanah',
            ],
            [
                'name' => 'Gudang',
                'slug' => 'gudang',
                'type' => 'gudang',
                'description' => 'Gudang',
            ],
            [
                'name' => 'Kantor',
                'slug' => 'kantor',
                'type' => 'kantor',
                'description' => 'Kantor',
            ],
        ];

        foreach ($unit as $key => $value) {
            MasterUnit::create($value);
        }
    }
}
