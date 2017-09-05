<?php

Route::get('/', function () {
    return view('guest.home');
});

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
