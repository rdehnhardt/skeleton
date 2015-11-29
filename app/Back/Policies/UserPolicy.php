<?php

namespace App\Back\Policies;

use App\Auth\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given post can be updated by the user.
     *
     * @param User $owner
     * @param User $user
     * @return bool
     */
    public function update(User $owner, User $user)
    {
        return $owner->id === $user->id;
    }

    /**
     * Determine if the given post can be deleted by the user.
     *
     * @param User $owner
     * @param User $user
     * @return bool
     */
    public function delete(User $owner, User $user)
    {
        return $owner->id === $user->id;
    }
}