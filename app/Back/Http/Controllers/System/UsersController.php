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
            return Redirect::route('back.system.users.index')->with('message', 'Successfully created record!')->with('message-class', 'success');
        } else {
            return Redirect::route('back.system.users.create')->with('message', 'Whooops! Could not create the record.')->with('message-class', 'error')->withInputs();
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

    public function update($id)
    {
    }

    public function destroy($id)
    {
    }
}
