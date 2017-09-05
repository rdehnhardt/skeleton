<?php

namespace App\Http\Controllers\Back\Common;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Show the user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.common.profile');
    }

    /**
     * update the user profile
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view('back.common.profile');
    }
}
