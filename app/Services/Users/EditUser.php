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
    public function isValid($id, array $data)
    {
        $this->rules['email'] = sprintf($this->rules['email'], $id);

        return Validator::make($data, $this->rules);
    }

    /**
     * @param $id
     * @param array $data
     * @return bool
     */
    public function execute($id, array $data)
    {
        if (!$this->isValid($id, $data)) {
            return false;
        }

        $user = User::find($id);
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