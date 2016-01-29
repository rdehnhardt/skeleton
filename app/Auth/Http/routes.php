<?php

// Authentication Routes...
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@showLoginForm']);
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

// Registration Routes...
Route::get('register', 'AuthController@showRegistrationForm');
Route::post('register', 'AuthController@register');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'PasswordController@showResetForm');
Route::post('password/email', 'PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'PasswordController@reset');