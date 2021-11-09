<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/login', [SiteController::class, 'loginForm'])->name('login');
Route::post('/login', [SiteController::class, 'login']);

Route::get('/logout', [SiteController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/profile', [SiteController::class, 'profile'])->name('profile');
    Route::middleware('can:admin,moderator')->get('/admin', [SiteController::class, 'admin'])->name('admin');
});


