<?php

if (!function_exists('create')) {
    function create($class, array $attributes = [])
    {
        return factory($class)->create($attributes);
    }
}

if (!function_exists('make')) {
    function make($class, array $attributes = [])
    {
        return factory($class)->make($attributes);
    }
}

if (!function_exists('raw')) {
    function raw($class, array $attributes = [])
    {
        return factory($class)->raw($attributes);
    }
}