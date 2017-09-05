<?php

namespace App\Http\Routes;

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
        $router->get('logout', 'LoginController@logout')->name('logout');

        // Registration Routes...
        if (config('auth.register')) {
            $router->get('register', 'RegisterController@showRegistrationForm')->name('register');
            $router->post('register', 'RegisterController@register');
        }

        // Password Reset Routes...
        $router->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $router->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $router->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
        $router->post('password/reset', 'ResetPasswordController@reset');
    }
}