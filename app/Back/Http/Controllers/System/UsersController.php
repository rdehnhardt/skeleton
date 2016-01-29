<?php

namespace App\Back\Http\Controllers\System;

use App\Back\Http\Controllers\BackController;
use App\Back\Http\Requests\System\UserRequest;
use App\Core\Models\User;
use Redirect;

class UsersController extends BackController
{
    public function index()
    {
        $records = User::paginate();

        return view('back::system.users.index', compact('records'));
    }

    public function create()
    {
        return view('back::system.users.create');
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        if ($user->save()) {
            $this->addFlash('Successfully created record!', 'success');

            return Redirect::route('back.system.users.index');
        } else {
            $this->addFlash('Whooops! Could not create the record.', 'danger');

            return Redirect::route('back.system.users.create')->withInputs();
        }
    }

    public function show($id)
    {
        $record = User::find($id);

        return view('back::system.users.show', compact('record'));
    }

    public function edit($id)
    {
        $record = User::find($id);

        return view('back::system.users.edit', compact('record'));
    }

    public function update($id, UserRequest $request)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->get('password')) {
            $user->password = $request->get('password');
        }

        if ($user->save()) {
            $this->addFlash('Successfully updated record!', 'success');

            return Redirect::route('back.system.users.index');
        } else {
            $this->addFlash('Whooops! Could not update the record.', 'danger');

            return Redirect::route('back.system.users.create')->withInputs();
        }
    }

    public function destroy($id)
    {
    }
}
