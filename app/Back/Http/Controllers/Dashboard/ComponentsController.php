<?php

namespace App\Back\Http\Controllers\Dashboard;

use App\Back\Http\Controllers\BackController;

class ComponentsController extends BackController
{
    public function index($component = 'index')
    {
        $include = "back::dashboard.components.partials.$component";

        return view("back::dashboard.components.index", compact('include'));
    }
}
