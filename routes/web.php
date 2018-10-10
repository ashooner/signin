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

//if ( env('APP_ENV') != 'local' ) {
//    \URL::forceRootUrl('http://foodconnection.uky.edu/signin/');
//}


Auth::routes();

if ( env('APP_ENV') != 'local' ) {
    Route::get('/signin/', 'HomeController@index')->name('home');
} else {
    Route::get('/', 'HomeController@index')->name('home');
}

Route::middleware(['auth'])->group(function () {

    Route::get('/', 'HomeController@index')->name('home');

    //Route::get('/', 'EventController@index');

    Route::get('admin/events', 'EventAdminController@redirect')->name('admin.events-redirect');
    Route::get('admin/events/new', function () {
        return redirect('admin/event/new');
    });
    Route::get('admin/events/{month}', 'EventAdminController@index')->name('admin.events');

    Route::get('admin/event/new', 'EventAdminController@create')->name('admin.event.create');
    Route::post('admin/event/new', 'EventAdminController@store');
    Route::get('admin/event/{event}', 'EventAdminController@show')->name('admin.event.show');
    Route::get('admin/event/{event}/download', 'EventAdminController@download');


    //Route::get('monthly-report/', 'MonthlyReportController@redirect');
    //Route::get('monthly-report/{month}/', 'MonthlyReportController@index')->name('reports.monthly-report');

    Route::delete('admin/attendees/{attendee}/delete', 'AttendeeAdminController@destroy')->name('admin.attendees.delete');

    Route::get('events', 'EventController@redirect')->name('events-redirect');
    Route::get('events/{month}', 'EventController@index')->name('events');

    Route::get('event/{event}', 'EventController@show');
    Route::get('event/{event}/signin', 'SigninController@create');
    Route::post('event/{event}/signin', 'SigninController@store');

});