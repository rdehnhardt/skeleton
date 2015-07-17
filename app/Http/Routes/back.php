<?php

/**
 * Dashboard
 */
Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

Route::group(['prefix' => 'foo', 'namespace' => 'Foo'], function () {

    /**
     * Bar
     */
    Route::resource('bar', 'BarController');

});