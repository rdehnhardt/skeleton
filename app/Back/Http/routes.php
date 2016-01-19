<?php

Route::get('/', ['as' => 'back', 'uses' => 'Dashboard\DefaultController@index']);

Route::get('/components/{component?}', ['as' => 'back.components', 'uses' => 'Components\DefaultController@index']);
