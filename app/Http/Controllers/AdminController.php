<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;


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
            return view('admin.home')->with('message', 'Login Successful. Welcome Admin');
        }
        return redirect()->back()->with('error','Login Failed. Please Try Again');

    }
    
}
