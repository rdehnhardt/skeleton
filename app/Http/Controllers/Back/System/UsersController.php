<?php

namespace App\Http\Controllers\Back\System;

use App\Http\Controllers\Back\BackController;
use App\Http\Requests\Back\Foo\UserRequest;
use App\Models\User;
use Redirect;
use Request;

class UsersController extends BackController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Request::get('filter')) {
            $records = User::where('title', 'LIKE', '%' . Request::get('filter') . '%')->paginate(10);
        } else {
            $records = User::paginate(10);
        }


        return view('back.scope.system.users.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.scope.system.users.create');
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
        $User->slug = str_slug($request->get('title'));
        $User->title = $request->get('title');
        $User->status = $request->get('status');

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

        return view('back.scope.system.users.show', compact('record'));
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

        return view('back.scope.system.users.edit', compact('record'));
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
        $User->slug = str_slug($request->get('title'));
        $User->title = $request->get('title');
        $User->status = $request->get('status');

        if ($User->save()) {
            return Redirect::route('back.system.users.index')->with('message', 'Successfully updated record!')->with('message-class', 'success');
        } else {
            return Redirect::route('back.system.users.edit')->with('message', 'Whooops! Could not update the record.')->with('message-class', 'error')->withInputs();
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

        if ($User->delete()) {
            return Redirect::back()->with('message', 'Successfully deleted record!')->with('message-class', 'success');
        } else {
            return Redirect::back()->with('message', 'Whooops! Could not delete the record.')->with('message-class', 'error')->withInputs();
        }
    }

}
