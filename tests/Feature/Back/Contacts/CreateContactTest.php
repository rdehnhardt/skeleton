<?php

namespace Tests\Feature\Back\Contacts;

use App\Models\Contact;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreateContactTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function unauthorized_user_cannot_visit_contacts()
    {
        $this
            ->get(route('back.contacts.create'))
            ->assertRedirect('/login');
    }

    /** @test */
    public function authorized_user_may_visit_create_contact()
    {
        $this->signIn();

        $this
            ->get(route('back.contacts.create'))
            ->assertSee(trans('back.contacts.create'));
    }

    /** @test */
    public function authorized_user_can_create_contact()
    {
        $this->signIn();

        $data = raw(Contact::class);

        $this
            ->post(route('back.contacts.store'), $data)
            ->assertRedirect(route('back.contacts.index'));
    }

    /** @test */
    public function unauthorized_user_cannot_create_contact()
    {
        $data = raw(Contact::class);

        $this
            ->post(route('back.contacts.store'), $data)
            ->assertRedirect(route('login'));
    }
}
