<?php

$actions = DB::select('select * from actions');

foreach ($actions as $action) {
    switch (strtoupper($action->type)) {
        case 'GET':
            Route::get($action->uri, ['as' => $action->name, 'uses' => $action->controller]);
            break;
        case 'POST':
            Route::post($action->uri, ['as' => $action->name, 'uses' => $action->controller]);
            break;
        case 'PUT':
            Route::put($action->uri, ['as' => $action->name, 'uses' => $action->controller]);
            break;
        case 'DELETE':
            Route::delete($action->uri, ['as' => $action->name, 'uses' => $action->controller]);
            break;
    }

}

//dd($actions);

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