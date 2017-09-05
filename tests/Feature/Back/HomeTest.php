<?php

namespace Tests\Feature\Back;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function an_unauthenticated_user_may_not_visit_dashboard()
    {
        $this
            ->get('/home')
            ->assertRedirect('/login');
    }
}
