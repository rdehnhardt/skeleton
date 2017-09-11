<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\UserRequest;
use Illuminate\Http\UploadedFile;

class ProfileController extends Controller
{
    /**
     * Folder to be save the images
     *
     * @var string
     */
    private $folder = 'app/public/profile';

    /**
     * Show the user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('back.profile');
    }

    /**
     * update the user profile
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request)
    {
        try {
            if ($request->has('name')) {
                auth()->user()->name = $request->get('name');
            }

            if ($request->has('email')) {
                auth()->user()->email = $request->get('email');
            }

            if ($request->get('password')) {
                auth()->user()->password = bcrypt($request->get('password'));
            }

            if ($request->hasFile('picture')) {
                if ($filename = $this->upload($request->file('picture'))) {
                    auth()->user()->picture = $filename;
                }
            }

            auth()->user()->save();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.profile'));
    }

    /**
     * @param UploadedFile $file
     * @return string|false
     * @throws \Symfony\Component\HttpFoundation\File\Exception\FileException
     */
    private function upload(UploadedFile $file)
    {
        $filename = md5(auth()->user()->id) . '.' . $file->getClientOriginalExtension();
        $file->move(storage_path($this->folder), $filename);

        return $filename;
    }
}
