<?php

use App\Http\Controllers\reddit\RedditController;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('home.home');
});

Route::get('feature', function () {
    return view('feature.feature');
});

Route::get('about', function () {
    return view('about.about');
});

Route::get('contact', function () {
    return view('contact.contact');
});