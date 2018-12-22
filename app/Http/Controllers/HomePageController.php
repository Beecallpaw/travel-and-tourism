<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Contact;

class HomePageController extends Controller
{
    public function home()
    {
        return view('home.welcome');
    }
    public function gallery()
    {
        return view('home.gallery');
    }
    public function longTrekking()
    {
        return view('home.longTrekking');
    }
    public function shortTrekking()
    {
        return view('home.shortTrekking');
    }
    public function tour()
    {
        return view('home.tour');
    }
    public function places()
    {
        return view('home.places');
    }
    public function booking()
    {
        return view('home.booking');
    }
    public function about()
    {
        return view('home.about');
    }

    public function createContact()
    {
        return view('home.contact');
    }

    public function storeContact(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required|string|max:50',
            'email'         => 'required|email',
            'phone_number'  => 'required|min:7|max:10',
            'message'       => 'required'
        ]);
        $contact = new Contact;
        $contact->create($validatedData);
        Session::flash('success', 'Message sent Successfully. We will get back to you as soon as possible. Thank you');
        return redirect()->back();
    }
}
