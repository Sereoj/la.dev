<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show(City $city)
    {
        return
        [
            "name" => $city->name,
            "country" => $city->country
        ];
    }
}
