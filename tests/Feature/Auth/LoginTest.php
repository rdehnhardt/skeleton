<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_login_with_valid_credentials()
    {
        $user = create(User::class);

        $this
            ->post(route('login'), ['email' => $user->email, 'password' => 'secret'])
            ->assertRedirect('/back');
    }

    /** @test */
    public function a_user_login_with_invalid_credentials()
    {
        $user = create(User::class);

        $this
            ->post(route('login'), ['email' => $user->email, 'password' => 'anotherpassword'])
            ->assertSessionHasErrors(['email']);
    }
}
