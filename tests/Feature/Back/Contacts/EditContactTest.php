<?php

namespace Tests\Feature\Back\Contacts;

use App\Models\Contact;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class EditContactTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function unauthorized_user_cannot_visit_contacts()
    {
        $this
            ->get(route('back.contacts.edit', 1))
            ->assertRedirect('/login');
    }

    /** @test */
    public function authorized_user_may_visit_create_contact()
    {
        $contact = create(Contact::class);
        $this->signIn();

        $this
            ->get(route('back.contacts.edit', $contact->id))
            ->assertSee(trans('dictionary.update'));
    }

    /** @test */
    public function authorized_user_can_edit_contact()
    {
        $contact = create(Contact::class);
        $this->signIn();

        $this
            ->put(route('back.contacts.update', $contact->id), $contact->toArray())
            ->assertRedirect(route('back.contacts.index'));
    }

    /** @test */
    public function unauthorized_user_cannot_update_contact()
    {
        $data = raw(Contact::class);

        $this
            ->put(route('back.contacts.update', 1), $data)
            ->assertRedirect(route('login'));
    }
}
