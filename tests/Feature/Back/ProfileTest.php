<?php

namespace Tests\Feature\Back;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function unauthorized_user_may_not_visit_profile()
    {
        $this
            ->get(route('back.profile'))
            ->assertRedirect('/login');
    }

    /** @test */
    public function authorized_user_may_visit_profile()
    {
        $this->signIn($user = create(User::class));

        $this
            ->get(route('back.profile'))
            ->assertSee(trans('back.profile'))
            ->assertSee($user->email);
    }
}
