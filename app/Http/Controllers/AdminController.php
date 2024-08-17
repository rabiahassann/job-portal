<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    //

    public function showLoginForm()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to log in the admin
        if (Auth::guard('admins')->attempt($credentials)) {
            // Authentication succeeded
            return redirect()->intended('/dashboard'); // Redirect to the intended URL or a default location
        }
    
        // Authentication failed
        Alert::error('Invalid credentials', 'Oops!')->autoClose(3000);
    return redirect()->route('showLoginForm');
    }
    
    public function dashboard(){
        return view('admin.dashboard');

    }

    public function logout(){
     Auth::logout();
    return redirect('/');
    }
}
