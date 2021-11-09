<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->insert([
            [
                'city_id' => 1,
                'name' => 'Апартаменты у Кремля',
                'description' => 'Находится в Москве',
                'cost' => 4000
            ],
            [
                'city_id' => 2,
                'name' => 'Дом 16',
                'description' => 'Дом на 16 гостей',
                'cost' => 10000
            ],
        ]);
    }
}
