<?php

namespace Tests\Feature\Back\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function unauthorized_user_cannot_visit_users()
    {
        $this
            ->get(route('back.users.create'))
            ->assertRedirect('/login');
    }

    /** @test */
    public function authorized_user_may_visit_create()
    {
        $this->signIn();

        $this
            ->get(route('back.users.create'))
            ->assertSee(trans('back.users.create'));
    }

    /** @test */
    public function authorized_user_can_create_user()
    {
        $this->signIn();

        $data = raw(User::class, ['password' => 'password', 'password_confirmation' => 'password']);

        $this
            ->post(route('back.users.store'), $data)
            ->assertRedirect(route('back.users.index'));
    }
}
