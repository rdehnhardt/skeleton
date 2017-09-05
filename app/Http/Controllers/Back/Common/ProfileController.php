<?php

namespace App\Http\Controllers\Back\Common;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.common.profile');
    }
}
