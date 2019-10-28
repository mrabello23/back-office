<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/announcements', 'AnnouncementsController@index')->name('announcements.index');
Route::get('/announcements/create', 'AnnouncementsController@create')->name('announcements.create');
Route::get('/announcements/{announcements}/edit', 'AnnouncementsController@edit')->name('announcements.edit');

Route::post('/announcements', 'AnnouncementsController@store')->name('announcements.save');
Route::put('/announcements/{announcements}', 'AnnouncementsController@update')->name('announcements.update');
Route::delete('/announcements/{announcements}', 'AnnouncementsController@destroy')->name('announcements.remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
