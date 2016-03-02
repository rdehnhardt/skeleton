<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'FrontController@index');
});

