<?php

namespace App\Front\Http\Controllers;

use App\Core\Models\User;
use App\Front\Http\Requests\UserRequest;

class UsersController extends FrontController
{
    public function boot()
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
        header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
        header('Access-Control-Allow-Credentials: true');
    }

    public function index()
    {
        return User::all();
    }

    public function store(UserRequest $request)
    {
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save();

        return $user;
    }

    public function update($id, UserRequest $request)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save();

        return $user;
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return $user;
    }
}
