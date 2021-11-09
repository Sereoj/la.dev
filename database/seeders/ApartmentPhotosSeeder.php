<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments_photos')->insert([
            [
                'apartment_id' => 1,
                'description' => 'Первая спальня',
                'path' => 'файла нет',
            ],
            [
                'apartment_id' => 1,
                'description' => 'Вторая спальня',
                'path' => 'файла нет',
            ],
            [
                'apartment_id' => 2,
                'description' => 'Первая спальня',
                'path' => 'файла нет',
            ],
            [
                'apartment_id' => 2,
                'description' => 'Вторая спальня',
                'path' => 'файла нет',
            ]
        ]);
    }
}
