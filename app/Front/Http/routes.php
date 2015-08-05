<?php

/**
 * Welcome
 */
Route::get('/', ['as' => 'welcome', 'uses' => 'HomeController@index']);