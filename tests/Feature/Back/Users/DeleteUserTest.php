<?php

namespace Tests\Feature\Back\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class DeleteUserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function authorized_users_can_delete_user()
    {
        $this->signIn();

        $user = create(User::class);

        $this
            ->delete(route('back.users.destroy', $user->id))
            ->assertRedirect(route('back.users.index'));
    }

    /** @test */
    public function unauthorized_user_cannot_update_user()
    {
        $user = create(User::class);

        $this
            ->delete(route('back.users.destroy', $user->id))
            ->assertRedirect(route('login'));
    }
}
