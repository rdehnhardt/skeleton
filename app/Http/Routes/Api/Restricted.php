<?php

namespace App\Http\Routes\Api;

use Illuminate\Contracts\Routing\Registrar;

class Restricted
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        // Guest
        $router->group(['prefix' => 'api', 'middleware' => ['api']], function (Registrar $router) {
            // Create your public routes here
        });

        // Restricted
        $router->group(['prefix' => 'api', 'middleware' => ['auth:api']], function (Registrar $router) {
            $router->resource('users', 'UsersController');
        });
    }
}