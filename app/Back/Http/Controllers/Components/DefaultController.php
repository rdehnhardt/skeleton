<?php

namespace App\Back\Http\Controllers\Components;

use App\Back\Http\Controllers\BackController;

class DefaultController extends BackController
{
    public function index($component = 'index')
    {
        $include = "back::components.partials.$component";

        return view("back::components.index", compact('include'));
    }
}
