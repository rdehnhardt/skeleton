<?php

namespace Tests\Auth\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_register()
    {
        $user = [
            'name' => $this->fake->name,
            'email' => $this->fake->email,
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ];

        $response = $this->post(route('register'), $user);
        $response->assertRedirect('/home');

        $response = $this->post(route('login'), ['email' => $user['email'], 'password' => 'secret']);
        $response->assertRedirect('/home');
    }
}
