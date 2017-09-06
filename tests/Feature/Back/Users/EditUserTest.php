<?php

namespace Tests\Feature\Back\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class EditUserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function unauthorized_user_cannot_visit_users()
    {
        $this
            ->get(route('back.users.edit', 1))
            ->assertRedirect('/login');
    }

    /** @test */
    public function authorized_user_may_visit_create()
    {
        $this->signIn();

        $this
            ->get(route('back.users.edit', 1))
            ->assertSee(trans('dictionary.update'));
    }

    /** @test */
    public function authorized_user_can_edit_user()
    {
        $this->signIn();

        $data = raw(User::class, ['password' => 'password', 'password_confirmation' => 'password']);

        $this
            ->put(route('back.users.update', 1), $data)
            ->assertRedirect(route('back.users.index'));
    }

    /** @test */
    public function unauthorized_user_cannot_update_user()
    {
        $data = raw(User::class);

        $this
            ->put(route('back.users.update', 1), $data)
            ->assertRedirect(route('login'));
    }
}
