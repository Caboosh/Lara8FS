<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $userdata = request()->validate([
            'name'          => 'required|max:255',
            'username'      => 'required|min:5|max:255|unique:users,username',
            'email'         => 'required|email|max:255|unique:users,email',
            'password'      => 'required|min:8|max:255',
        ]);
        User::create($userdata);

        session()->flash('success', 'Your Account has been successfly created.');

        return redirect('/');
    }
}
