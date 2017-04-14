<?php

namespace App\Providers;

use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group(['namespace' => "{$this->namespace}\\Web", 'middleware' => 'web'], function (Registrar $router) {
            foreach (glob(app_path('Http//Routes/Web') . '/*.php') as $file) {
                $namespace = basename($file, '.php');

                $router->group(['namespace' => $namespace], function (Registrar $router) use ($namespace) {
                    $this->app->make("App\\Http\\Routes\\Web\\$namespace")->map($router);
                });
            }
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group(['namespace' => "{$this->namespace}\\Api", 'middleware' => 'api'], function (Registrar $router) {
            foreach (glob(app_path('Http//Routes/Api') . '/*.php') as $file) {
                $namespace = basename($file, '.php');

                $router->group(['namespace' => $namespace], function (Registrar $router) use ($namespace) {
                    $this->app->make("App\\Http\\Routes\\Api\\$namespace")->map($router);
                });
            }
        });
    }
}
