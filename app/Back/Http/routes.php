<?php

/**
 * Profile
 */
Route::group(['prefix' => 'profile', 'namespace' => 'Dashboard'], function () {
    Route::get('/', ['as' => 'get.profile', 'uses' => 'ProfileController@index']);
    Route::post('/', ['as' => 'post.profile', 'uses' => 'ProfileController@store']);
});

/**
 * Dashboard
 */
Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
    Route::get('/', ['as' => 'back.dashboard', 'uses' => 'DefaultController@index']);
    Route::get('/visits/{start}/{end}', ['as' => 'back.dashboard.visits', 'uses' => 'DefaultController@visits']);
});

/**
 * Documents
 */
Route::group(['prefix' => 'documents', 'namespace' => 'Documents'], function () {
    Route::resource('images', 'ImagesController');
});

/**
 * System
 */
Route::group(['prefix' => 'system', 'namespace' => 'System'], function () {
    Route::resource('users', 'UsersController');
});