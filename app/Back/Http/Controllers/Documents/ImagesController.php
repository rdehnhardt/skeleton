<?php

namespace App\Back\Http\Controllers\Documents;

use App\Back\Http\Controllers\BackController;
use App\Back\Http\Requests\Documents\ImageRequest;
use App\Core\Models\Image;

class ImagesController extends BackController
{
    public function index()
    {
        $records = Image::paginate(9);

        return view('back::documents.images.index', compact('records'));
    }

    public function create()
    {
        return view('back::documents.images.create');
    }

    public function store(ImageRequest $request)
    {
        dd($request->file('image'));
    }
}
