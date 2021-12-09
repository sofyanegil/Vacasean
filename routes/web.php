<?php

use App\Models\Story;
use App\Models\Places;
use App\Models\Country;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RegisterController;

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
        'countries' => Country::latest()->paginate(4),
        'places' => Places::all(),
        'stories' => Story::all(),
    ]);
});

Route::get('/places', [PlacesController::class, 'index']);

Route::get('/places/{places:slug}', [PlacesController::class, 'show']);

Route::get('/stories', [StoryController::class, 'index']);

Route::get('/stories/{story:slug}', [StoryController::class, 'show']);

Route::get('/countries', [CountryController::class, 'index']);

Route::get('/countries/{country:slug}', [CountryController::class, 'show']);

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
