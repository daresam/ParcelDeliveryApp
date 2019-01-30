<?php


Route::get('/', 'FrontEndController@index');
Route::get('about', 'FrontEndController@about');
Route::get('gallery', 'FrontEndController@gallery');
Route::get('event', 'FrontEndController@event');
Route::get('contact', 'FrontEndController@contact');
Route::post('contact', 'FrontEndController@contactUs')->name('contact.us');

Route::get('membership/form', 'MembershipFormController@create')->name('membership.create');
Route::post('membership', 'MembershipFormController@store')->name('membership.store');

Route::get('event/form', 'EventRegistrationController@create')->name('eventreg.create');
Route::post('event', 'EventRegistrationController@store')->name('eventreg.store');

Route::get('admin', 'Admin\AdminController@loginAdmin');
Route::get('logout', 'Admin\AdminController@logout')->name('logout');

Route::group(['prefix' => 'admin' , 'middleware' => ['admin', 'prevent.back']], function() {

    Route::get('home', 'Admin\AdminController@dashboard')->name('dashboard');

    Route::resource('admin', 'Admin\AdminController');
    Route::resource('members', 'Admin\MemberController');
    Route::resource('events', 'Admin\EventController');
    Route::resource('event/registrations', 'Admin\EventRegistrationController');

});


Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');
