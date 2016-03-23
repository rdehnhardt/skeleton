<?php

namespace App\Back\Http\Controllers\System;

use App\Back\Http\Controllers\BackController;
use App\Back\Http\Requests\System\UserRequest;
use App\Core\Models\User;
use Gate;
use Redirect;
use Request;

class UsersController extends BackController
{
    public function index()
    {
        $query = User::select(['id', 'name', 'email', 'role', 'created_at']);

        if (Request::get('name')) {
            $query->where('name', 'LIKE', '%' . Request::get('name') . '%');
        }

        if (Request::get('email')) {
            $query->where('email', 'LIKE', '%' . Request::get('email') . '%');
        }

        $records = $query->paginate();
        
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
        $user->role = $request->get('role');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        if ($user->save()) {
            $this->addFlash(trans('back::dictionary.success'), 'success');

            return Redirect::route('back.system.users.index');
        } else {
            $this->addFlash(trans('back::dictionary.exception'), 'danger');

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
        $user->role = $request->get('role');
        $user->email = $request->get('email');

        if ($request->get('password')) {
            $user->password = $request->get('password');
        }

        if (Gate::denies('update', $user)) {
            $this->addFlash('Not Allowed!', 'info');

            return Redirect::route('back.system.users.index');
        } else {
            if ($user->save()) {
                $this->addFlash(trans('back::dictionary.success'), 'success');

                return Redirect::route('back.system.users.index');
            } else {
                $this->addFlash(trans('back::dictionary.exception'), 'danger');

                return Redirect::route('back.system.users.edit', ['id' => $id])->withInputs();
            }
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (Gate::denies('update', $user)) {
            $this->addFlash('Not Allowed!', 'info');

            return Redirect::route('back.system.users.index');
        } else {
            if ($user->delete()) {
                $this->addFlash(trans('back::dictionary.success'), 'success');

                return Redirect::route('back.system.users.index');
            } else {
                $this->addFlash(trans('back::dictionary.exception'), 'danger');

                return Redirect::route('back.system.users.index')->withInputs();
            }
        }
    }
}
