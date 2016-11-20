<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class Front
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->get('/', 'IndexController@index');
    }
}
