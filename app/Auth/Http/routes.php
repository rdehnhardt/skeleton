<?php

// Authentication Routes...
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'AuthController@login']);

// Logout
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

// Registration Routes...
Route::get('register', ['as' => 'register', 'uses' => 'AuthController@showRegistrationForm']);
Route::post('register', ['as' => 'register.post', 'uses' => 'AuthController@register']);

// Password Reset Routes...
Route::get('password/reset/{token?}', ['as' => 'password.reset', 'uses' => 'PasswordController@showResetForm']);
Route::post('password/email', ['as' => 'password.email', 'uses' => 'PasswordController@sendResetLinkEmail']);
Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'PasswordController@reset']);