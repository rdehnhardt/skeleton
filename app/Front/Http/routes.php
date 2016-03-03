<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'FrontController@index');
});

Route::group(['prefix' => 'img', 'namespace' => 'Thumb'], function () {
    Route::get('{folder}/{file}', ['as' => 'image.view', 'uses' => 'ImageController@view']);
    Route::get('{folder}/{width}/{file}', ['as' => 'image.view', 'uses' => 'ImageController@resize']);
    Route::get('{folder}/{width}/{height}/{file}', ['as' => 'image.view', 'uses' => 'ImageController@crop']);
});