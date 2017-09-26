<?php

namespace Tests\Feature\Back\Contacts;

use App\Models\Contact;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ListContactTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function unauthorized_contact_may_not_visit_contacts()
    {
        $this
            ->get(route('back.contacts.index'))
            ->assertRedirect('/login');
    }

    /** @test */
    public function authorized_users_may_visit_contact()
    {
        $contact = create(Contact::class);
        $this->signIn();

        $this
            ->get(route('back.contacts.index'))
            ->assertSee(trans('dictionary.contacts'))
            ->assertSeeText($contact->name);
    }
}
