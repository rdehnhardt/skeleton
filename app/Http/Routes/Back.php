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
        $router->group(['prefix' => 'back'], function (Registrar $router) {
            $router->get('/', 'DashboardController@index');
        });
    }
}
