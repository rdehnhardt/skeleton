<?php

$actions = DB::select('select * from actions');

foreach ($actions as $action) {
    if (strtoupper(trim($action->type)) === 'GET') {
        Route::get($action->uri, ['as' => $action->name, 'uses' => $action->controller]);
    }

//    if (strtoupper(trim($action->type)) === 'POST') {
//        Route::post($action->uri, ['as' => $action->name, 'uses' => $action->controller]);
//    }
//
//    if (strtoupper(trim($action->type)) === 'PUT') {
//        Route::put($action->uri, ['as' => $action->name, 'uses' => $action->controller]);
//    }
//
//    if (strtoupper(trim($action->type)) === 'DELETE') {
//        Route::delete($action->uri, ['as' => $action->name, 'uses' => $action->controller]);
//    }
}

//Route::get('/', ['as' => 'back', 'uses' => 'Dashboard\DefaultController@index']);
//
//Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function () {
//    Route::get('/', ['as' => 'back.dashboard', 'uses' => 'DefaultController@index']);
//    Route::get('/visits/{start}/{end}', ['as' => 'back.dashboard.visits', 'uses' => 'DefaultController@visits']);
//    Route::get('/components/{component?}', ['as' => 'back.dashboard.components', 'uses' => 'ComponentsController@index']);
//});
//
//Route::group(['prefix' => 'system', 'namespace' => 'System'], function () {
//    Route::resource('users', 'UsersController');
//    Route::resource('actions', 'ActionsController');
//});