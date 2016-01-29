<?php

Route::get('/', ['as' => 'back', 'uses' => 'Dashboard\DefaultController@index']);
Route::get('/visits/{start}/{end}', ['as' => 'back.visits', 'uses' => 'Dashboard\DefaultController@visits']);

Route::get('/components/{component?}', ['as' => 'back.components', 'uses' => 'Components\DefaultController@index']);
