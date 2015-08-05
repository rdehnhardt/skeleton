<?php

namespace App\Back\Http\Controllers\Foo;

use App\Back\Http\Controllers\Controller;
use App\Back\Http\Requests\BarRequest;
use App\Back\Models\Bar;
use Redirect;
use Request;

class BarController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Request::get('filter')) {
            $records = Bar::where('title', 'LIKE', '%' . Request::get('filter') . '%')->paginate(10);
        } else {
            $records = Bar::paginate(10);
        }


        return view('back.scope.foo.bar.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('back.scope.foo.bar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BarRequest $request
     * @return Response
     */
    public function store(BarRequest $request)
    {
        $Bar = new Bar();
        $Bar->slug = str_slug($request->get('title'));
        $Bar->title = $request->get('title');
        $Bar->status = $request->get('status');

        if ($Bar->save()) {
            return Redirect::route('back.foo.bar.index')->with('message', 'Successfully created record!')->with('message-class', 'success');
        } else {
            return Redirect::route('back.foo.bar.create')->with('message', 'Whooops! Could not create the record.')->with('message-class', 'error')->withInputs();
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
        $record = Bar::find($id);

        return view('back.scope.foo.bar.show', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $record = Bar::find($id);

        return view('back.scope.foo.bar.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BarRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(BarRequest $request, $id)
    {
        $Bar = Bar::find($id);
        $Bar->slug = str_slug($request->get('title'));
        $Bar->title = $request->get('title');
        $Bar->status = $request->get('status');

        if ($Bar->save()) {
            return Redirect::route('back.foo.bar.index')->with('message', 'Successfully updated record!')->with('message-class', 'success');
        } else {
            return Redirect::route('back.foo.bar.edit')->with('message', 'Whooops! Could not update the record.')->with('message-class', 'error')->withInputs();
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
        $Bar = Bar::find($id);

        if ($Bar->delete()) {
            return Redirect::back()->with('message', 'Successfully deleted record!')->with('message-class', 'success');
        } else {
            return Redirect::back()->with('message', 'Whooops! Could not delete the record.')->with('message-class', 'error')->withInputs();
        }
    }

}
