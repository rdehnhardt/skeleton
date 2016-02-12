<?php

Route::get('/', ['as' => 'back', 'uses' => 'Dashboard\DefaultController@index']);
Route::get('/profile', ['as' => 'get.profile', 'uses' => 'Dashboard\ProfileController@index']);
Route::post('/profile', ['as' => 'post.profile', 'uses' => 'Dashboard\ProfileController@store']);

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
    Route::get('/', ['as' => 'back.dashboard', 'uses' => 'DefaultController@index']);
    Route::get('/visits/{start}/{end}', ['as' => 'back.dashboard.visits', 'uses' => 'DefaultController@visits']);
});

Route::group(['prefix' => 'system', 'namespace' => 'System'], function () {
    Route::resource('users', 'UsersController');
});