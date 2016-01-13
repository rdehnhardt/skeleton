<?php

namespace App\Back\Http\Controllers\Dashboard;

use App\Back\Http\Controllers\BackController;

class DefaultController extends BackController
{
    public function index()
    {
        return view('back::dashboard.default');
    }
}
