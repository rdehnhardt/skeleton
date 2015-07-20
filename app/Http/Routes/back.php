<?php

Route::get('/', ['as' => 'dashboard', 'uses' => 'Dashboard\DefaultController@index']);

Route::get('/panel-with-tabs', ['as' => 'dashboard.panel', 'uses' => 'Dashboard\DefaultController@panel']);

Route::group(['prefix' => 'foo', 'namespace' => 'Foo'], function () {
    Route::resource('bar', 'BarController');
});

Route::group(['prefix' => 'system', 'namespace' => 'System'], function () {
    Route::resource('users', 'UsersController');
});