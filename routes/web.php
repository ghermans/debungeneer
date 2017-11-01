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

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kalender', 'BookingsController@kalender')->name('bookings.kalender');
Route::get('/kalender/events.json', 'BookingsController@kalenderData')->name('bookings.kalenderData');

Route::get('/reservaties', 'BookingsController@index')->name('bookings');
Route::get('/kalender/reserveren/nieuw/{id}', 'BookingsController@register')->name('booking.register');

Route::get('/users', 'UserController@index')->name('users');
Route::get('/users/create', 'UserController@register')->name('users.register');
