<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_login_with_valid_credentials()
    {
        $user = factory(User::class)->create();

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'secret',
        ]);

        $response->assertRedirect('/home');
    }

    /** @test */
    public function a_user_login_with_invalid_credentials()
    {
        $user = factory(User::class)->create();

        $response = $this->post(route('login'), [
            'email' => $user->email,
            'password' => 'anotherpassword',
        ]);

        $response->assertSessionHasErrors(['email']);
    }
}
