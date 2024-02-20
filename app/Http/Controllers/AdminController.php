<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){           
            return view ('login');
        

    }
    public function loginAdmin(Request $request)
    {
        // Your login logic here
        // Example: Validate credentials and attempt to log in the user

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->route('admin.dashboard'); 
        } else {
           
            return redirect()->route('web-admin')->with('status', 'Invalid credentials');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard'); 
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('web-admin');
    }
    
}
