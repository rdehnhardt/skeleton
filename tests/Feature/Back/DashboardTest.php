<?php

namespace Tests\Feature\Back;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function unauthorized_user_may_not_visit_dashboard()
    {
        $this
            ->get(route('back.dashboard'))
            ->assertRedirect('/login');
    }

    /** @test */
    public function authorized_user_may_visit_dashboard()
    {
        $this->signIn();

        $this
            ->get(route('back.dashboard'))
            ->assertSee(trans('back.dashboard'));
    }
}
