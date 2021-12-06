<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlacesController;
use App\Models\Country;
use App\Models\Places;
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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'countries' => Country::all(),
        'places' => Places::all(),
    ]);
});

Route::get('/places', [PlacesController::class, 'index']);

Route::get('/stories', function () {
    return view('stories', [
        "title" => "Story",
    ]);
});

Route::get('/countries', [CountryController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/login', function () {
    return view('login/index', [
        "title" => "Login",
    ]);
});
