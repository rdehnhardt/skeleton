<?php

namespace App\Http\Controllers\Web\Restricted;

use App\Http\Controllers\Controller;
use App\Http\Requests\Restricted\ProfileRequest;
use App\Repositories\UsersRepository;
use Auth;
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
     * @var UsersRepository
     */
    private $repository;

    /**
     * ProfileController constructor.
     * @param UsersRepository $repository
     */
    public function __construct(UsersRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restricted.profile');
    }

    /**
     * @param ProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Symfony\Component\HttpFoundation\File\Exception\FileException
     */
    public function store(ProfileRequest $request)
    {
        if ($request->get('name')) {
            $this->repository->patch($this->getUserId(), 'name', $request->get('name'));
        }

        if ($request->get('email')) {
            $this->repository->patch($this->getUserId(), 'email', $request->get('email'));
        }

        if ($request->get('password')) {
            $this->repository->patch($this->getUserId(), 'password', bcrypt($request->get('password')));
        }

        if ($request->file('picture')) {
            if ($filename = $this->upload($request->file('picture'))) {
                $this->repository->patch($this->getUserId(), 'picture', $filename);
            }
        }

        flash(trans('messages.success'), 'success');

        return redirect(route('restricted.profile'));
    }

    /**
     * @return int
     */
    private function getUserId(): int
    {
        return Auth::user()->id;
    }

    /**
     * @param UploadedFile $file
     * @return string|false
     * @throws \Symfony\Component\HttpFoundation\File\Exception\FileException
     */
    private function upload(UploadedFile $file)
    {
        $filename = md5($this->getUserId()) . '.' . $file->getClientOriginalExtension();
        $file->move(storage_path($this->folder), $filename);

        return $filename;
    }
}
