<?php

namespace Tests\Feature\Back\Contacts;

use App\Models\Contact;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class DeleteContactTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function authorized_users_can_delete_contact()
    {
        $this->signIn();

        $contact = create(Contact::class);

        $this
            ->delete(route('back.contacts.destroy', $contact->id))
            ->assertRedirect(route('back.contacts.index'));
    }

    /** @test */
    public function unauthorized_user_cannot_delete_contact()
    {
        $contact = create(Contact::class);

        $this
            ->delete(route('back.contacts.destroy', $contact->id))
            ->assertRedirect(route('login'));
    }
}
