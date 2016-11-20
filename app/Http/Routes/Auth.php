<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;
use Auth as Authentication;

class Auth
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        Authentication::routes();
    }
}
