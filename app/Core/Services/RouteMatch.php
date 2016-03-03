<?php

namespace App\Core\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RouteMatch
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param string $pattern
     * @return int
     */
    public function is($pattern)
    {
        return Str::startsWith($this->request->path(), $pattern);
    }
}
