<?php

use App\Models\meditation;
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
Route::get('mainpage', 'App\Http\Controllers\mainPageController@index');
Route::get('article', 'App\Http\Controllers\mainPageController@article');
Route::get('/aPropos', 'App\Http\Controllers\mainPageController@aPropos');

