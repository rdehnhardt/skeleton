<?php

namespace Tests\Feature\Back;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function a_unauthenticated_user_can_not_visit_homepage()
    {
        $this
            ->get('/home')
            ->assertRedirect('/login');
    }
}
