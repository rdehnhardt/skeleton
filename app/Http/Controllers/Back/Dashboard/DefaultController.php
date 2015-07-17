<?php

namespace App\Http\Controllers\Back\Dashboard;

use App\Http\Controllers\Back\BackController;

class DefaultController extends BackController
{

    public function index()
    {
        return view('back.scope.dashboard.default');
    }

    public function panel()
    {
        return view('back.scope.dashboard.panel-with-tab');
    }

}
