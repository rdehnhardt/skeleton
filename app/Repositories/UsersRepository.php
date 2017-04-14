<?php

namespace App\Repositories;

use App\Models\User;

class UsersRepository
{
    /**
     * Get the user instances.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return User::orderBy('name', 'asc')->get();
    }

    /**
     * Get a user by the given ID.
     *
     * @param  int $id
     * @return User|null
     */
    public function find($id)
    {
        return User::find($id);
    }

    /**
     * Get a user by the given ID.
     *
     * @param string $slug
     * @return User|null
     */
    public function findBySlug($slug)
    {
        return User::whereSlug($slug)->first();
    }

    /**
     * Get a user by the given api token.
     *
     * @param string $token
     * @return User|null
     */
    public function findByApiToken(string $token)
    {
        return User::whereApiToken($token)->first();
    }

    /**
     * Create new user in database
     *
     * @param string $name
     * @param string $email
     * @return User
     */
    public function create($name, $email)
    {
        $user = (new User())->forceFill([
            'name' => $name,
            'email' => $email,
            'api_token' => str_random(60),
        ]);

        $user->save();

        return $user;
    }

    /**
     * Update the given user.
     **
     * @param int $id
     * @param string|null $name
     * @param string|null $email
     * @param string|null $password
     * @param string|null $picture
     * @return User
     */
    public function update($id, $name, $email, $password = null, $picture = null)
    {
        $user = $this->find($id);
        $user->name = $name;
        $user->email = $email;

        if ($password) {
            $user->password = bcrypt($password);
        }

        if ($picture) {
            $user->picture = $picture;
        }

        $user->save();

        return $user;
    }

    /**
     * Update the given user.
     **
     * @param int $id
     * @param string $field
     * @param $value
     * @return User
     */
    public function patch($id, $field, $value)
    {
        $user = $this->find($id);
        $user->{$field} = $value;
        $user->save();

        return $user;
    }

    /**
     * Update the given client.
     *
     * @param int $id
     * @return User
     * @throws \Exception
     */
    public function delete(int $id)
    {
        $user = $this->find($id);
        $user->delete();

        return $user;
    }

    /**
     * Generate token for reset password
     *
     * @param User $user
     * @return User|null
     */
    public function generateRememberToken(User $user)
    {
        $user->remember_token = str_random(60);
        $user->save();
    }

    /**
     * @param $token
     * @param $password
     * @return User|null
     */
    public function setPasswordByApiToken($token, $password)
    {
        $user = $this->findByApiToken($token);
        $user->password = bcrypt($password);
        $user->save();

        return $user;
    }
}