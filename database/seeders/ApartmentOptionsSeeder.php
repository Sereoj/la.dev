<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments_options')->insert([
            [
                'apartment_id' => 1,
                'name' => 'Ранний заезд',
                'cost' => 700,
                'type' => 'once',
            ],
            [
                'apartment_id' => 1,
                'name' => 'Поздний заезд',
                'cost' => 700,
                'type' => 'once',
            ],
            [
                'apartment_id' => 1,
                'name' => 'Ежедневная уборка',
                'cost' => 400,
                'type' => 'daily',
            ],
            [
                'apartment_id' => 1,
                'name' => 'Завтрак для каждого гостя',
                'cost' => 200,
                'type' => 'dailyForEach',
            ],
        ]);
    }
}
