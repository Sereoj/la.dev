<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApartmentResource;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{

    public function index()
    {
        return ApartmentResource::collection(Apartment::all());
    }
    public function show(Apartment $apartment)
    {
        return new ApartmentResource($apartment);
    }
}
