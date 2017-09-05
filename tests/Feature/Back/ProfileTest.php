<?php

namespace Tests\Feature\Back;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_unauthenticated_user_may_not_visit_profile()
    {
        $this
            ->get(route('back.profile'))
            ->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_may_visit_profile()
    {
        $this->signIn($user = create(User::class));

        $this
            ->get(route('back.profile'))
            ->assertSee($user->name)
            ->assertSee($user->email);
    }

    /** @test */
    public function an_authenticated_user_may_update_profile()
    {
        $this->signIn($user = create(User::class));

        $this
            ->put(route('back.profile'), raw(User::class))
            ->assertSee(trans('messages.success'));
    }
}
