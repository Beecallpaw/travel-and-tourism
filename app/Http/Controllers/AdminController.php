<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\Contact;
use App\Booking;
use Session;


class AdminController extends Controller
{
    public function getLoginForm()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $admin = new Admin;
        $dbUsername = $admin->first()->username;
        $dbPassword = $admin->first()->password;
        $username = $request->get('username');
        $password = $request->get('password');
        if ($dbUsername=== $username && Hash::check($password, $dbPassword)) {
            session(['is_admin' =>'admin']);
            Session::flash('success', 'Login Successful. Welcome Admin');

            return view('admin.home');
        }
        Session::flash('error', 'Invalid Credentials, Please Try Again');
        return redirect()->back();
    }
        
    public function logout()
    {
        session(['is_admin' => '']);
        
        Session::flash('success', 'Logout Successful');

        return redirect()->route('home');

    }

    public function getMessages()
    {
        $contacts = Contact::all();
        return view('admin.contacts')->withContacts($contacts);
    }

    public function deleteMessage($id)
    {
        $message = Contact::find($id);
        $message->delete();

        Session::flash('success', 'Message Successfully Deleted');

        return redirect()->back();
    }
    
    public function getBookings()
    {
        $bookings = Booking::all();
        return view('admin.bookings')->withBookings($bookings);
    }

     public function deleteBooking($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        Session::flash('success', 'Booking Successfully Deleted');

        return redirect()->back();
    }
    
}
