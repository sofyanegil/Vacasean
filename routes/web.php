<?php

use App\Models\Country;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/places', function () {
    return view('places');
});

Route::get('/countries', function () {
    return view('countries', [
        'title' => 'Countries',
        'countries' => Country::all()
    ]);
});

Route::get('/about', function () {
    return view('about');
});
