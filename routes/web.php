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

Route::get('dashboard','DashboardController@index');
Route::get('contacts','DashboardController@contacts');


Route::get('viewcontact/{id}', 'DashboardController@viewcontact');

Route::get('deletecontact/{id}', 'DashboardController@deletecontact');

Route::post('updatecontact/{id}', 'DashboardController@updatecontact');

Route::post('multipledelete', 'DashboardController@multipledelete');
