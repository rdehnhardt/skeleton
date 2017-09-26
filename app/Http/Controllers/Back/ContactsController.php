<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\ContactRequest;
use App\Models\Contact;

class ContactsController extends Controller
{
    /**
     * Show the contacts page.
     *
     * @return \Illuminate\Http\Response
     * @throws \InvalidArgumentException
     */
    public function index()
    {
        $contacts = Contact::paginate(10);

        return view('back.contacts.index', compact('contacts'));
    }

    /**
     * Show the contacts create page.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.contacts.create');
    }

    /**
     * Show the contacts store create.
     *
     * @param ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        try {
            $contact = new Contact();
            $contact->name = $request->get('name');
            $contact->save();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.contacts.index'));
    }

    /**
     * Show the contacts edit page.
     *
     * @param Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('back.contacts.edit', compact('contact'));
    }

    /**
     * Show the contacts edit page.
     *
     * @param Contact $contact
     * @param ContactRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(Contact $contact, ContactRequest $request)
    {
        try {
            $contact->name = $request->get('name');
            $contact->save();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.contacts.index'));
    }

    /**
     * Show the contacts edit page.
     *
     * @param Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        try {
            $contact->delete();

            flash(trans('messages.success'), 'success');
        } catch (\Exception $e) {
            flash(trans('messages.exception'), 'danger');
        }

        return redirect(route('back.contacts.index'));
    }
}
