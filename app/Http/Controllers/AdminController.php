<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use Session;


class AdminController extends Controller
{
    public function getLoginForm()
    {
        return view('login');
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
    
}
