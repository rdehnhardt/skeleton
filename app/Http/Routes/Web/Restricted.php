<?php

namespace App\Http\Routes\Web;

use Illuminate\Contracts\Routing\Registrar;

class Restricted
{
    /**
     * @param \Illuminate\Contracts\Routing\Registrar $router
     */
    public function map(Registrar $router)
    {
        $router->group(['middleware' => ['auth']], function (Registrar $router) {
            // Dashboard
            $router->get('/dashboard', 'HomeController@index')->name('restricted.dashboard');

            // Profile
            $router->get('/profile', 'ProfileController@index')->name('restricted.profile');
            $router->post('/profile', 'ProfileController@store');

            // Companies
            $router->get('/companies', 'CompaniesController@index')->name('restricted.companies');

            // Applicants
            $router->get('/applicants', 'ApplicantsController@index')->name('restricted.applicants');

            // Users
            $router->get('/users', 'UsersController@index')->name('restricted.users');
        });
    }
}