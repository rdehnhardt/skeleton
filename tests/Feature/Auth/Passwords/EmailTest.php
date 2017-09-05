<?php

namespace Tests\Feature\Auth\Passwords;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class EmailTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_send_password_reset_link()
    {
        $user = factory(User::class)->create();

        $this->post(route('password.email'), ['email' => $user->email]);

        $this->seeEmailTo($user->email);
    }
}
