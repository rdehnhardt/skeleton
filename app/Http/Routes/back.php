<?php

/**
 * Dashboard
 */
Route::get('/', ['as' => 'dashboard', 'uses' => 'Dashboard\DefaultController@index']);

/**
 * Just example
 */
Route::get('/panel-with-tabs', ['as' => 'dashboard.panel', 'uses' => 'Dashboard\DefaultController@panel']);

/**
 * Foo
 */
Route::group(['prefix' => 'foo', 'namespace' => 'Foo'], function () {

    /**
     * Bar
     */
    Route::resource('bar', 'BarController');

});