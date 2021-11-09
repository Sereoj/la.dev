<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/country', [\App\Http\Controllers\CountryController::class,'index']);
Route::middleware('auth:api')->group(function () {
    Route::post('/country',[\App\Http\Controllers\CountryController::class,'store']);
    Route::post('/document',[\App\Http\Controllers\DocumentController::class,'store']);
    Route::get('/document',[\App\Http\Controllers\DocumentController::class,'index']);
    Route::patch('/country/{country}',[\App\Http\Controllers\CountryController::class,'update']);
    Route::delete('/country/{country}',[\App\Http\Controllers\CountryController::class,'destroy']);
});

Route::get('/country/{country}',[\App\Http\Controllers\CountryController::class,'show']);

Route::get('/country/{country}/city',[\App\Http\Controllers\CountryController::class,'city']);
Route::post('/country/{country}/city',[\App\Http\Controllers\CountryController::class,'storeCity']);
Route::post('/country/{country}/cities',[\App\Http\Controllers\CountryController::class,'storeCities']);

Route::get('/city/{city}',[\App\Http\Controllers\CityController::class,'show']);


Route::post('/booking',[\App\Http\Controllers\BookingController::class,'store']);
Route::get('/booking/{booking}',[\App\Http\Controllers\BookingController::class,'show']);

Route::get('/apartment', [\App\Http\Controllers\ApartmentController::class,'index']);
Route::get('/apartment/{apartment}',[\App\Http\Controllers\ApartmentController::class,'show']);

Route::post('/register', [\App\Http\Controllers\UserController::class,'store']);

Route::post('/login',[\App\Http\Controllers\UserController::class, 'apiLogin']);

