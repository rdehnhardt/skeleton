<?php

namespace App\Front\Providers;

use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'front');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'front');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
