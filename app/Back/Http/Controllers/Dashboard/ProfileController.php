<?php

namespace App\Back\Http\Controllers\Dashboard;

use App\Back\Http\Controllers\BackController;
use App\Back\Http\Requests\ProfileRequest;
use Redirect;
use Auth;

class ProfileController extends BackController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('back::dashboard.profile');
    }

    public function store(ProfileRequest $request)
    {
        Auth::user()->name = $request->get('name');
        Auth::user()->email = $request->get('email');
        Auth::user()->password = $request->get('password');

        if (Auth::user()->save()) {
            $this->addFlash(trans('back::dictionary.success'), 'success');
        } else {
            $this->addFlash(trans('back::dictionary.exception'), 'danger');
        }

        return Redirect::route('get.profile');
    }
}
