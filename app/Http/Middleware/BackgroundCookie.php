<?php

namespace App\Http\Middleware;

use Closure;
use View;

class BackgroundCookie
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $random = $this->getImageIndex($request);
        View::share('background', $random);

        $response = $next($request);
        $response->withCookie($this->getCookie($random));

        return $response;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return int
     */
    private function getImageIndex($request)
    {
        return $request->hasCookie('image')
            ? $request->cookie('image')
            : random_int(1, 9);
    }

    /**
     * @param $random
     * @return \Cookie
     */
    private function getCookie($random)
    {
        return cookie('image', $random, 3600);
    }
}
