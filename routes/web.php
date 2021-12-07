<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\StoryController;
use App\Models\Country;
use App\Models\Places;
use App\Models\Story;
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
        'stories' => Story::all(),
    ]);
});

Route::get('/places', [PlacesController::class, 'index']);

Route::get('/stories', [StoryController::class, 'index']);

Route::get('/story', function () {
    return view('story', [
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

Route::get('/register', function () {
    return view('register/index', [
        "title" => "Register",
    ]);
});
