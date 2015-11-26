<?php

namespace App\Back\Http\Controllers\Dashboard;

use App\Back\Http\Controllers\Controller;
use App\Back\Http\Requests\Profile\ProfileRequest;
use App\Auth\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Redirect;

class ProfileController extends Controller
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

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $this->seo()->setTitle(trans('dictionary.profile'));

        $record = $this->auth->user();

        return view('back::scope.profile.index', compact('record'));
    }

    /**
     * @param ProfileRequest $request
     * @param int            $id
     *
     * @return mixed
     */
    public function update(ProfileRequest $request, $id)
    {
        $User = User::find($id);

        if ($request->get('name')) {
            $User->name = $request->get('name');
        }

        if ($request->get('email')) {
            $User->email = $request->get('email');
        }

        if ($request->get('password') && env('APP_ENV') != 'homolog') {
            $User->password = bcrypt($request->get('password'));
        }

        if (env('ALTER_USER', true)) {
            if ($User->save()) {
                $this->flash()->success('Data has changed!');
            } else {
                $this->flash()->error('Whooops! Could not change data.');
            }
        } else {
            $this->flash()->error('Whooops! Not Allowed.');
        }

        return Redirect::back();
    }
}
