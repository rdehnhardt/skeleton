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

        $this->assertDatabaseHas('users', ['email' => $user['email']]);
    }

    /** @test */
    public function a_user_can_not_register_without_email()
    {
        $user = [
            'name' => $this->fake->name,
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ];

        $response = $this->post(route('register'), $user);
        $response->assertSessionHasErrors(['email']);

        $this->assertDatabaseMissing('users', ['name' => $user['name']]);
    }

    /** @test */
    public function a_user_can_not_register_without_password()
    {
        $user = [
            'name' => $this->fake->name,
            'email' => $this->fake->email,
            'password_confirmation' => 'secret',
        ];

        $response = $this->post(route('register'), $user);
        $response->assertSessionHasErrors(['password']);

        $this->assertDatabaseMissing('users', ['email' => $user['email']]);
    }

    /** @test */
    public function a_user_can_not_register_without_password_confirmation()
    {
        $user = [
            'name' => $this->fake->name,
            'email' => $this->fake->email,
            'password' => 'secret',
        ];

        $response = $this->post(route('register'), $user);
        $response->assertSessionHasErrors(['password']);

        $this->assertDatabaseMissing('users', ['email' => $user['email']]);
    }

    /** @test */
    public function a_user_can_not_register_with_different_passwords()
    {
        $user = [
            'name' => $this->fake->name,
            'email' => $this->fake->email,
            'password' => 'anotherpassword',
            'password_confirmation' => 'secret',
        ];

        $response = $this->post(route('register'), $user);
        $response->assertSessionHasErrors(['password']);

        $this->assertDatabaseMissing('users', ['email' => $user['email']]);
    }
}
