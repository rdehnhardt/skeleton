<?php

namespace App\Http\Routes\Web;

use Illuminate\Contracts\Routing\Registrar;

class Auth
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        // Authentication Routes...
        $router->get('login', 'LoginController@showLoginForm')->name('login');
        $router->post('login', 'LoginController@login');
        $router->any('logout', 'LoginController@logout')->name('logout');

        // Register
        $router->get('register/{token}', 'RegisterController@password')->name('register.password');
        $router->post('register/{token}', 'RegisterController@store');

        // Password Reset Routes...
        $router->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $router->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $router->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        $router->post('password/reset', 'ResetPasswordController@reset');
    }
}