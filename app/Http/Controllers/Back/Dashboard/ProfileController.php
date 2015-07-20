<?php

namespace App\Http\Controllers\Back\Dashboard;

use App\Http\Controllers\Back\BackController;
use App\Http\Requests\Back\Profile\ProfileRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Redirect;

class ProfileController extends BackController
{
    /**
     * @var Guard
     */
    private $auth;

    /**
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function index()
    {
        $record = $this->auth->user();

        return view('back.scope.profile.index', compact('record'));
    }

    public function update(ProfileRequest $request, $id)
    {
        $User = User::find($id);

        if ($request->get('name')) {
            $User->name = $request->get('name');
        }

        if ($request->get('email')) {
            $User->email = $request->get('email');
        }

        if ($request->get('password')) {
            $User->password = bcrypt($request->get('password'));
        }

        if ($User->save()) {
            return Redirect::back()->with('message', 'Data has changed!')->with('message-class', 'success');
        } else {
            return Redirect::back()->with('message', 'Whooops! Could not change data.')->with('message-class', 'error')->withInputs();
        }
    }

}
