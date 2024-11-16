<?php

use App\Http\Controllers\reddit\RedditController;
use App\Http\Controllers\reddit_data\RegisterRedditDataController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('register_reddit_data', [RegisterRedditDataController::class, 'registerRedditData'])->name('register_reddit_data');
Route::get('get_all_reddits', [RedditController::class, 'getAllReddits'])->name('get_all_reddits');
Route::get('get_reddit/{id}', [RedditController::class, 'getReddit'])->name('get_reddit');
