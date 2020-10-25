<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YoutubeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','App\Http\Controllers\YoutubeController@index');
Route::match(['get','post'],'/detail/video_id={id}','App\Http\Controllers\YoutubeController@index');
Route::match(['get','post'],'/getYTList','App\Http\Controllers\YoutubeController@getYTList');

// Route::match(['get','post'],'/',[YoutubeController::class,'index']);

