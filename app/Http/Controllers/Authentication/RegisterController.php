<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Users\CreateUser;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/back';

    /**
     * @var CreateUser
     */
    private $createUser;

    /**
     * Create a new controller instance.
     *
     * @param CreateUser $createUser
     */
    public function __construct(CreateUser $createUser)
    {
        $this->createUser = $createUser;
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return $this->createUser->isValid($data);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        return $this->createUser->execute($data);
    }
}
