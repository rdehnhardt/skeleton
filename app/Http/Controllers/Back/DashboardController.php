<?php

namespace App\Http\Controllers\Back;

class DashboardController extends BackController
{

    public function index()
    {
        return view('back.scope.dashboard.default');
    }

}
