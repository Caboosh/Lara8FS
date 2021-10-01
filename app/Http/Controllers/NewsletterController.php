<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke (Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);
        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'Your Email could not be added to our Newsletter list.'
            ]);
        }
        return redirect('/')->with('success', 'You are now Signed up to our Newsletter!');
    }
}
