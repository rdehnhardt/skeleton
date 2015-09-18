<?php

namespace App\Back\Http\Middleware;

use Closure;
use App\Core\Http\Middleware\Authenticate;

class BackEnd extends Authenticate
{
    public function handle($request, Closure $next)
    {
        app('seotools')->setDescription(false);

        return parent::handle($request, $next);
    }
}