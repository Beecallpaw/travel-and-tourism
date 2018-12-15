<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required|string|max:50',
            'email'         => 'required|email',
            'phone_number'  => 'required',
            'message'       => 'required'
        ]);
        $contact = new Contact;
        $contact->create($validatedData);
        session()->flash('message', 'Message sent Successfully. We will get back to you as soon as possible. Thank you');
        return redirect()->back();
    }

    public function list()
    {
        $contacts = Contact::all();
        return view('admin.contacts')->withContacts($contacts);
    }
    public function delete($id)
    {
        $contact = Contact::find($id);
        dd($contact);
    }
}
