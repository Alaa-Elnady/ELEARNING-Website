<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register form
    public function showRegForm() {
        return view('users.register');
    }

    // Create new user from register form
    public function storeNewUser(Request $request) {
        $formFields = $request->validate([
            'name' => ['required' , 'min:3'],
            'email' => ['required' , 'email' , Rule::unique('users' , 'email')],
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);

        // Hashing the password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message' , 'Your Registeration done successfully!');
    }

    // Show Login Form
    public function showLoginForm() {
        return view('users.login');
    }

    // Login (Authenticate) User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required' , 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message' , 'You are now logged In!');
        } else {
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
        }
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        // Session Invalidate
        $request->session()->invalidate();
        // Change the token of the previous session token
        $request->session()->regenerateToken();

        return redirect('/')->with('message' , 'You have been logged out!');
    }
}
