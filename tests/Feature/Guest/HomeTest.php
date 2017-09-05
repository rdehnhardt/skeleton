<?php

namespace Tests\Feature\Guest;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function a_visitor_can_visit_homepage()
    {
        $response = $this->get('/');

        $response->assertSee('/img/logo.png');
        $response->assertSee('Login');
    }
}
