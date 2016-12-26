<?php

namespace App\Services\Users;

use App\Events\Users\UserWasUpdated;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class EditUser
{
    /**
     * @var array
     */
    private $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users,email,%s',
        'password' => 'required|min:6|confirmed',
    ];

    /**
     * @param array $data
     * @return mixed
     */
    public function isValid(array $data)
    {
        $this->rules['email'] = sprintf($this->rules['email'], $data['id']);

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

        $user = User::find($data['id']);
        $user->name = $data['name'];
        $user->email = $data['email'];

        if ($data['password']) {
            $user->password = bcrypt($data['password']);
        }

        if ($user->save()) {
            event(new UserWasUpdated($user));

            return $user;
        }

        return false;
    }
}