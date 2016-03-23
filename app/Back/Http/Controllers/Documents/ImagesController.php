<?php

namespace App\Back\Http\Controllers\Documents;

use App\Back\Http\Controllers\BackController;
use App\Back\Http\Requests\System\UserRequest;

class ImagesController extends BackController
{
    public function index()
    {
        return view('back::documents.images.index');
    }

    public function store(UserRequest $request)
    {
    }
}
