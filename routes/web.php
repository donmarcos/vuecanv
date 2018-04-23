<?php

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

Route::get('mapvoters', 'web\MapController@index')->name('master');

Route::get('cvadmin', 'web\CVAdminController@index')->name('cvadmin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('welcome');
Route::get('/test', 'HomeController@test')->name('home');
