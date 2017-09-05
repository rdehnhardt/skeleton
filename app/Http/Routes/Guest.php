<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class Guest
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->get('/', 'HomeController@index')->name('guest.home');
    }
}