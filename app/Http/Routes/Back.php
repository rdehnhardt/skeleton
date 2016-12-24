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
        $router->group(['prefix' => 'back', 'middleware' => ['web', 'auth']], function (Registrar $router) {
            $router->get('/', 'DashboardController@index');

            $router->group(['prefix' => 'system', 'namespace' => 'System'], function (Registrar $router) {
                $router->get('/', ['as' => 'back.system', 'uses' => 'DashboardController@index']);

                $router->resource('users', 'UsersController');
            });
        });
    }
}
