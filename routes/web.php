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
    return view('mainpage');
});
Route::get('mainpage', 'App\Http\Controllers\mainPageController@index');
Route::get('article', 'App\Http\Controllers\mainPageController@article');
Route::get('/aPropos', 'App\Http\Controllers\mainPageController@aPropos');
Route::get('sidebar_temoignages_real', 'App\Http\Controllers\mainPageController@sidebar_temoignages_real');
Route::get('sidebar_temoignages_real_all', 'App\Http\Controllers\mainPageController@sidebar_temoignages_real_all');
Route::get('sidebar_temoignage', 'App\Http\Controllers\mainPageController@sidebar_temoignage');
Route::get('sidebar_temoignage_all', 'App\Http\Controllers\mainPageController@sidebar_temoignage_all');
Route::get('sidebar_profil', 'App\Http\Controllers\mainPageController@sidebar_profil');
Route::get('sidebar_article', 'App\Http\Controllers\mainPageController@sidebar_article');
Route::get('sidebar_article_messagerie', 'App\Http\Controllers\mainPageController@sidebar_article_messagerie');
Route::get('sidebar_add_article', 'App\Http\Controllers\mainPageController@sidebar_add_article');

