<?php

namespace App\Http\Controllers\Back\System;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('back.system.home');
    }
}
