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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/', 'EventController@index');


Route::get('/events', 'EventController@index');
Route::get('/events/new', 'EventController@create');
Route::post('/events/new', 'EventController@store');
Route::get('events/{event}', 'EventController@show');



//Route::post('/events/{event}/attendees', 'AttendeeController@store');
Route::get('/events/{event}/signin', 'SigninController@create');
Route::post('/events/{event}/signin', 'SigninController@store');

