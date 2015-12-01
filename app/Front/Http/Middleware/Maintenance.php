<?php

namespace App\Front\Http\Middleware;

use Closure;
use File;

class Maintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (File::exists(storage_path('app/maintenance'))) {
            $allowed = explode(',', env('MAINTENANCE_ALLOWED_IPS', ''));

            if (in_array($request->getClientIp(), $allowed) === false) {
                return response(view('errors/503'), 503);
            }
        }

        return $next($request);
    }
}
