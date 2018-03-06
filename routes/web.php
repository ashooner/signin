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

//Route::get('/', 'EventController@index');

Route::get('admin/events', 'EventAdminController@index')->name('admin.events');
Route::get('admin/events/new', 'EventAdminController@create')->name('admin.events.create');
Route::post('admin/events/new', 'EventAdminController@store');
Route::get('admin/events/{event}', 'EventAdminController@show')->name('admin.events.show');
Route::get('admin/events/{event}/download', 'EventAdminController@download');

Route::delete('admin/attendees/{attendee}/delete', 'AttendeeAdminController@destroy')->name('admin.attendees.delete');

Route::get('events', 'EventController@index')->name('events');
Route::get('events/{event}', 'EventController@show');

//Route::post('/events/{event}/attendees', 'AttendeeController@store');
Route::get('events/{event}/signin', 'SigninController@create');
Route::post('events/{event}/signin', 'SigninController@store');

