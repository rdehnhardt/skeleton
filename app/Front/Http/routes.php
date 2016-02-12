<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('front::welcome');
    });
});

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {

    Route::resource('users', 'UsersController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);

});
