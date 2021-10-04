<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create ()
    {
        return view('sessions.create');
    }

    public function store ()
    {
        $userdata = request()->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        if (! Auth::attempt($userdata)) {
        // If Auth Fails...
            throw ValidationException::withMessages([
                'email'=> 'Your Provided Credentials Cannot be verified',
                'password'=> 'Your Password Provided is invalid'
            ]);
        }
        // Otherwise, if Auth Succeeds...
            session()->regenerate();

            return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy ()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Successfully Logged Out, Goodbye!');
    }
}
