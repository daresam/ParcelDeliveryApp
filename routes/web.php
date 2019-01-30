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


Route::group([ 'middleware' => ['admin']], function() {

    Route::resource('user', 'UserController');
    Route::resource('parcel', 'ParcelController');
    Route::put('change/destination/{id}', 'ParcelController@changeDestinatioin')->name('change.destination');
    Route::put('delivery/status/{id}', 'ParcelController@deliveryStatus')->name('delivery.status');
    Route::DELETE('cancel/order/{id}', 'ParcelController@cancelOrder')->name('cancel.order');



});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Auth::routes();
