<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class Authentication
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        // Authentication Routes...
        $router->get('login', 'LoginController@showLoginForm')->name('login');
        $router->post('login', 'LoginController@login');
        $router->post('logout', 'LoginController@logout')->name('logout');

        // Password Reset Routes...
        $router->get('password/reset', 'ForgotPasswordController@showLinkRequestForm');
        $router->post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
        $router->get('password/reset/{token}', 'ResetPasswordController@showResetForm');
        $router->post('password/reset', 'ResetPasswordController@reset');

        // Registration Routes...
        if (config('auth.register')) {
            $router->get('register', 'RegisterController@showRegistrationForm');
            $router->post('register', 'RegisterController@register');
        }
    }
}
