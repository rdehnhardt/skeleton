<?php

namespace App\Guest\Providers;

use Illuminate\Support\ServiceProvider;

class GuestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'guest');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'guest');
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
