<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class CarbonServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        Carbon::setLocale($this->app->getLocale());
    }
}
