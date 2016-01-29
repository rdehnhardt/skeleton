<?php

namespace App\Back\Http\Controllers\System;

use App\Back\Http\Controllers\BackController;

class UsersController extends BackController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('back::dashboard.default');
    }
}
