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
// Email

Route::get('/testmail', 'DashboardController@testmail');
Route::post('/sendemail', 'EmailController@sendemail');

// SmS 

Route::get('/testsms', 'DashboardController@testsms');
Route::post('/testsms', 'DashboardController@sendsms');

Route::get('rendercontacts', 'DashboardController@rendercontacts');
Route::get('rendergroups', 'DashboardController@rendergroups');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dashboard Main Pages
Route::get('dashboard','DashboardController@index');
Route::get('contacts','DashboardController@contacts');
Route::get('groups', 'DashboardController@groups');
Route::get('contacts1','DashboardController@contacts1');

// CRUD Operations

// Contacts Section

Route::get('viewcontact/{id}', 'DashboardController@viewcontact');

Route::get('deletecontact/{id}', 'DashboardController@deletecontact');

Route::post('updatecontact/{id}', 'DashboardController@updatecontact');

Route::post('multipledelete', 'DashboardController@multipledelete');

Route::post('addmultiplecontacts', 'DashboardController@addmultiplecontacts');

Route::post('importcontacts', 'DashboardController@importcontacts');

// Groups Section

Route::post('addGroup', 'DashboardController@addGroup');

Route::get('viewgroup/{id}', 'DashboardController@viewgroup');

Route::get('deletegroup/{id}', 'DashboardController@deletegroup');

Route::post('updategroup/{id}', 'DashboardController@updategroup');
