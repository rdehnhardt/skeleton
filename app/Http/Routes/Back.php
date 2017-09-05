<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class Back
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->group(['prefix' => 'back', 'middleware' => 'auth'], function () use ($router) {
            $router->get('/', 'DashboardController@index')->name('back.dashboard');
        });
    }
}