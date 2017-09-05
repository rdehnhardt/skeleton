<?php

Route::get('/', function () {
    return view('guest.home');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
