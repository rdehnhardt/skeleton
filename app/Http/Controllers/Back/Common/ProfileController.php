<?php

namespace App\Http\Controllers\Back\Common;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\Common\ProfileRequest;

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
     * @param ProfileRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request)
    {
        dd($request->all());
        
        return view('back.common.profile');
    }
}
