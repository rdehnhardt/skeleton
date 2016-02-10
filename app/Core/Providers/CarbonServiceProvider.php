<?php

namespace App\Core\Providers;

use Carbon\Carbon;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

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
