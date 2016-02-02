<?php

namespace App\Back\Http\Controllers\System;

use App\Back\Http\Controllers\BackController;
use App\Back\Http\Requests\System\ActionRequest;
use App\Core\Models\Action;
use Redirect;

class ActionsController extends BackController
{
    public function index()
    {
        $records = Action::paginate();

        return view('back::system.actions.index', compact('records'));
    }

    public function create()
    {
        return view('back::system.actions.create');
    }

    public function store(ActionRequest $request)
    {
        $user = new Action();
        $user->name = $request->get('name');
        $user->type = $request->get('type');

        if ($user->save()) {
            $this->addFlash('Successfully created record!', 'success');

            return Redirect::route('back.system.actions.index');
        } else {
            $this->addFlash('Whooops! Could not create the record.', 'danger');

            return Redirect::route('back.system.actions.create')->withInputs();
        }
    }

    public function show($id)
    {
        $record = Action::find($id);

        return view('back::system.actions.show', compact('record'));
    }

    public function edit($id)
    {
        $record = Action::find($id);

        return view('back::system.actions.edit', compact('record'));
    }

    public function update($id, ActionRequest $request)
    {
        $user = Action::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->get('password')) {
            $user->password = $request->get('password');
        }

        if ($user->save()) {
            $this->addFlash('Successfully updated record!', 'success');

            return Redirect::route('back.system.actions.index');
        } else {
            $this->addFlash('Whooops! Could not update the record.', 'danger');

            return Redirect::route('back.system.actions.edit', ['id' => $id])->withInputs();
        }
    }

    public function destroy($id)
    {
        $user = Action::find($id);

        if ($user->delete()) {
            $this->addFlash('Successfully delete record!', 'success');

            return Redirect::route('back.system.actions.index');
        } else {
            $this->addFlash('Whooops! Could not delete the record.', 'danger');

            return Redirect::route('back.system.actions.index')->withInputs();
        }
    }
}
