<?php

namespace Tests\Feature\Back\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ListUserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function unauthorized_user_may_not_visit_users()
    {
        $this
            ->get(route('back.users.index'))
            ->assertRedirect('/login');
    }

    /** @test */
    public function authorized_user_may_visit_dashboard()
    {
        $this->signIn($user = create(User::class));

        $this
            ->get(route('back.users.index'))
            ->assertSee(trans('dictionary.users'))
            ->assertSee($user->email)
            ->assertSee($user->name);
    }
}
