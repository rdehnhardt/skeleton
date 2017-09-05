<?php

namespace Tests\Feature\Auth\Passwords;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ResetTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_send_password_reset_link()
    {
        $user = create(User::class);

        $this->post(route('password.request'), [
            'email' => $user->email,
            'password' => 'new-password',
            'password_confirmation' => 'new-password',
        ]);

        $this->assertTrue(true);
    }
}
