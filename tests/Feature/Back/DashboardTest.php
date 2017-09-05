<?php

namespace Tests\Feature\Back;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_unauthenticated_user_may_not_visit_dashboard()
    {
        $this
            ->get('/back')
            ->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_may_visit_dashboard()
    {
        $this->signIn();

        $this
            ->get('/back')
            ->assertSee(trans('back.dashboard'));
    }
}
