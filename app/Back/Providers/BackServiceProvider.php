<?php

namespace App\Back\Providers;

use Illuminate\Support\ServiceProvider;

class BackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'back');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'back');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
