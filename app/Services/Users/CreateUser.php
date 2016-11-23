<?php

namespace App\Services\Users;

use App\Events\UserWasCreated;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class CreateUser
{
    /**
     * @var array
     */
    private $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
    ];

    /**
     * @param array $data
     * @return mixed
     */
    public function isValid(array $data)
    {
        return Validator::make($data, $this->rules);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function execute(array $data)
    {
        if (!$this->isValid($data)) {
            return false;
        }

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);

        if ($user->save()) {
            event(new UserWasCreated($user));
        }

        return false;
    }
}