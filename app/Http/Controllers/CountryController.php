<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return Country::all();
    }



    public function store(Request $request)
    {
        //$this->authorize('admin');
        return Country::create($request->all());
    }


    public function show(Country $country)
    {
        return $country;
    }



    public function update(Request $request, Country $country)
    {
        $country->update($request->all());

        return $country;
    }


    public function destroy(Country $country)
    {
        $country->delete();

        return ['deleted' => true];
    }

    public function city(Country $country)
    {
        return $country->cities;
    }

    public function storeCity(Country $country, Request $request)
    {
        return $country->cities()->create($request->all());
    }

    public function storeCities(Country $country, Request $request)
    {
        return $country->cities()->createMany($request->all());
    }
}
