<?php

namespace App\Back\Http\Controllers\Documents;

use App\Back\Http\Controllers\BackController;
use App\Back\Http\Requests\Documents\ImageRequest;
use App\Core\Models\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Redirect;

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
        $record = new Image();
        $record->title = $request->get('title');
        $record->file = $this->uploadImage($request->file('image'));
        $record->tags = $request->get('tags');
        $record->description = $request->get('description');

        if ($record->save()) {
            $this->addFlash(trans('back::dictionary.success'), 'success');

            return Redirect::route('back.documents.images.index');
        } else {
            $this->addFlash(trans('back::dictionary.exception'), 'danger');

            return Redirect::route('back.documents.images.create')->withInputs();
        }
    }

    /**
     * @param UploadedFile $file
     * @return array|null|\Symfony\Component\HttpFoundation\File\UploadedFile
     * @throws \RuntimeException
     */
    private function uploadImage(UploadedFile $file, $name = null)
    {
        if ($name === null) {
            $name = implode('.', [md5(uniqid('', true)), $file->getClientOriginalExtension()]);
        }

        if ($file->isValid()) {
            if ($file->move(storage_path('app/images'), $name)) {
                return $name;
            }
        }

        throw new \RuntimeException(_ucwords(trans('back::dictionary.exception')));
    }
}
