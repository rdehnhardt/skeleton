<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\CreatePasswordRequest;
use App\Repositories\UsersRepository;
use Auth;

class RegisterController extends Controller
{
    /**
     * @var UsersRepository
     */
    private $repository;

    /**
     * Create a new controller instance.
     * @param UsersRepository $repository
     */
    public function __construct(UsersRepository $repository)
    {
        $this->middleware('guest');

        $this->repository = $repository;
    }

    /**
     * @param string $apiToken
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function password(string $apiToken)
    {
        return view('auth.passwords.create', [
            'token' => $apiToken
        ]);
    }

    /**
     * @param CreatePasswordRequest $request
     * @param string $apiToken
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreatePasswordRequest $request, string $apiToken)
    {
        $user = $this->repository->setPasswordByApiToken($apiToken, $request->get('password'));
        Auth::login($user);

        return redirect('/dashboard');
    }
}
