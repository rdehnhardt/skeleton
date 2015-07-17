<?php

/**
 * Welcome
 */
Route::get('/', ['as' => 'welcome', function () {
    return view('front.scope.home');
}]);
