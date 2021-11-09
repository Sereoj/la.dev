<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['country_id' => 1, "name" => "Москва"],
            ['country_id' => 1, "name" => "Чебоксары"],
        ]);
    }
}
