<?php

use App\Http\Controllers\Tweet;
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

Route::get('/', [Tweet::class, 'ecrireTweet']);
Route::get('/', [Tweet::class, 'suppTweet']);
Route::get('/', [Tweet::class, 'commenterTweet']);
Route::get('/', [Tweet::class, 'likerTweet']);
Route::get('/', [Tweet::class, 'partagerTweet']);
