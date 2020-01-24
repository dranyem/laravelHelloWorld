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

// Route::get('/newpage', 'helloworldController@show');
Route::get('/oldPage', function () {
    return view('welcome');
});
Route::get('/', 'helloworldController@showHome');

Route::get('/home', 'helloworldController@showHome');
Route::get('/aboutus', 'helloworldController@showAboutUs');
Route::get('/contactus', 'helloworldController@showContactUs');

