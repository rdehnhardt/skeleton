<?php

namespace App\Back\Http\Controllers\System;

use App\Auth\Models\User;
use App\Back\Http\Controllers\Controller;
use App\Back\Http\Requests\System\UserRequest;
use DB;
use Redirect;
use Request;
use Gate;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Request::get('q')) {
            $records = User::select('id', 'name', 'email', DB::raw("MATCH(name, email) AGAINST (? IN BOOLEAN MODE) AS score"))
                ->whereRaw("MATCH(name, email) AGAINST (? IN BOOLEAN MODE)")
                ->setBindings([Request::get('q'), Request::get('q')])
                ->orderBy('score', 'desc')
                ->paginate(10);
        } else {
            $records = User::paginate(10);
        }


        return view('back::scope.system.users.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('back::scope.system.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserRequest $request
     * @return Response
     */
    public function store(UserRequest $request)
    {
        $User = new User();
        $User->name = $request->get('name');
        $User->email = $request->get('email');
        $User->password = bcrypt($request->get('password'));

        if ($User->save()) {
            return Redirect::route('back.system.users.index')->with('message', 'Successfully created record!')->with('message-class', 'success');
        } else {
            return Redirect::route('back.system.users.create')->with('message', 'Whooops! Could not create the record.')->with('message-class', 'error')->withInputs();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $record = User::find($id);

        return view('back::scope.system.users.show', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $record = User::find($id);

        return view('back::scope.system.users.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(UserRequest $request, $id)
    {
        $User = User::find($id);
        $User->name = $request->get('name');
        $User->email = $request->get('email');
        $User->password = bcrypt($request->get('password'));

        if (Gate::denies('update', $User)) {
            return Redirect::route('back.system.users.index')->with('message', 'Not Allowed!')->with('message-class', 'danger');
        } else {
            if ($User->save()) {
                return Redirect::route('back.system.users.index')->with('message', 'Successfully created record!')->with('message-class', 'success');
            } else {
                return Redirect::route('back.system.users.create')->with('message', 'Whooops! Could not create the record.')->with('message-class', 'error')->withInputs();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $User = User::find($id);

        if (Gate::denies('delete', $User)) {
            return Redirect::route('back.system.users.index')->with('message', 'Not Allowed!')->with('message-class', 'danger');
        } else {
            if ($User->delete()) {
                return Redirect::route('back.system.users.index')->with('message', 'Successfully deleted record!')->with('message-class', 'success');
            } else {
                return Redirect::route('back.system.users.create')->with('message', 'Whooops! Could not delete the record.')->with('message-class', 'error');
            }
        }
    }

}
