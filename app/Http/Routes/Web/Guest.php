<?php

namespace App\Http\Routes\Web;

use App\Events\UserWasCreated;
use App\Models\User;
use Illuminate\Contracts\Routing\Registrar;

class Guest
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->get('/', function () {
            return view('guest.home');
        });
    }
}