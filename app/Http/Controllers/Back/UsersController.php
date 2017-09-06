<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\UserRequest;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Show the users page.
     *
     * @return \Illuminate\Http\Response
     * @throws \InvalidArgumentException
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('back.users.index', compact('users'));
    }

    /**
     * Show the users create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.users.create');
    }

    /**
     * Show the users store create.
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
            $user = new User();
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = bcrypt($request->get('password'));
            $user->save();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.users.index'));
    }

    /**
     * Show the users edit page.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('back.users.edit', compact('user'));
    }

    /**
     * Show the users edit page.
     *
     * @param User $user
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, UserRequest $request)
    {
        try {
            $user->name = $request->get('name');
            $user->email = $request->get('email');

            if ($request->has('password')) {
                $user->password = bcrypt($request->get('password'));
            }

            $user->save();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.users.index'));
    }

    /**
     * Show the users edit page.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.users.index'));
    }
}
