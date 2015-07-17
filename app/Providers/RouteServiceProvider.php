<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = [
        'back' => 'App\Http\Controllers\Back',
        'front' => 'App\Http\Controllers\Front',
        'auth' => 'App\Http\Controllers\Auth',
    ];

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace['back'], 'prefix' => 'back', 'middleware' => 'auth'], function ($router) {
            require app_path('Http/Routes/back.php');
        });

        $router->group(['namespace' => $this->namespace['front']], function ($router) {
            require app_path('Http/Routes/front.php');
        });

        $router->group(['namespace' => $this->namespace['auth']], function ($router) {
            require app_path('Http/Routes/auth.php');
        });
    }
}
