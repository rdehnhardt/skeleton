<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_user_can_register()
    {
        if (config('auth.register')) {
            $user = raw(User::class, ['password' => 'secret', 'password_confirmation' => 'secret']);

            $this
                ->post(route('register'), $user)
                ->assertRedirect('/back');

            $this
                ->post(route('login'), $user)
                ->assertRedirect('/back');

            $this->assertDatabaseHas('users', ['email' => $user['email']]);
        } else {
            $this->assertTrue(true);
        }
    }

    /** @test */
    public function an_user_can_not_register_without_email()
    {
        if (config('auth.register')) {
            $user = raw(User::class, ['email' => null, 'password' => 'secret', 'password_confirmation' => 'secret']);

            $this
                ->post(route('register'), $user)
                ->assertSessionHasErrors(['email']);

            $this->assertDatabaseMissing('users', ['name' => $user['name']]);
        } else {
            $this->assertTrue(true);
        }
    }

    /** @test */
    public function an_user_can_not_register_without_password()
    {
        if (config('auth.register')) {
            $user = raw(User::class, ['password_confirmation' => 'secret']);

            $this
                ->post(route('register'), $user)
                ->assertSessionHasErrors(['password']);

            $this->assertDatabaseMissing('users', ['email' => $user['email']]);
        } else {
            $this->assertTrue(true);
        }
    }

    /** @test */
    public function an_user_can_not_register_without_password_confirmation()
    {
        if (config('auth.register')) {
            $user = raw(User::class, ['password' => 'secret']);

            $this
                ->post(route('register'), $user)
                ->assertSessionHasErrors(['password']);

            $this->assertDatabaseMissing('users', ['email' => $user['email']]);
        } else {
            $this->assertTrue(true);
        }
    }

    /** @test */
    public function an_user_can_not_register_with_different_passwords()
    {
        if (config('auth.register')) {
            $user = raw(User::class, ['password' => 'terces', 'password_confirmation' => 'secret']);

            $this
                ->post(route('register'), $user)
                ->assertSessionHasErrors(['password']);

            $this->assertDatabaseMissing('users', ['email' => $user['email']]);
        } else {
            $this->assertTrue(true);
        }
    }
}
