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
        $router->group(['prefix' => 'back', 'middleware' => 'auth', 'as' => 'back.'], function () use ($router) {
            # Dashboard
            $router->get('/', 'DashboardController@index')->name('dashboard');

            # Profile
            $router->post('profile', 'ProfileController@update')->name('profile.store');
            $router->get('profile', 'ProfileController@index')->name('profile');

            # Users
            $router->resource('users', 'UsersController');

            # Contacts
            $router->resource('contacts', 'ContactsController');
        });
    }
}