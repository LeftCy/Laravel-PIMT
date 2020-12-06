<?php

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

/*

Route::get('/', function () {
    return view('welcome');
});

*/

//TopPage
Route::get('/', 'App\Http\Controllers\TopController@index')->name('top');

//TestPage
Route::post('/branch', 'App\Http\Controllers\BranchController@index')->name('branch');

//RegistPage
Route::get('/regist', 'App\Http\Controllers\RegistController@index')->name('regist');
Route::post('/regist/thanks',  'App\Http\Controllers\RegistController@thanks')->name('regist.thanks');

//FixPage
Route::get('/fix', 'App\Http\Controllers\FixController@index')->name('fix');
Route::post('/fix/fix', 'App\Http\Controllers\FixController@fix')->name('fix.fix');
Route::post('/fix/fixed', 'App\Http\Controllers\FixController@fixed')->name('fix.fixed');

//SearchPage
Route::get('/search', 'App\Http\Controllers\SearchController@index')->name('search');
Route::post('/search/get', 'App\Http\Controllers\SearchController@get')->name('search.get');

//DeletePage
Route::get('/delete', 'App\Http\Controllers\DeleteController@index')->name('delete');
Route::post('/delete/confirm', 'App\Http\Controllers\DeleteController@confirm')->name('delete.confirm');
Route::post('/delete/thanks', 'App\Http\Controllers\DeleteController@thanks')->name('delete.thanks');