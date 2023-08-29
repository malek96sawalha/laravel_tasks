<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myuser;
class saleh extends Controller
{
    public function handle(Request $request){

        $submittedEmail = $request->input('email');
        $submittedPassword = $request->input('password');

        $users = myuser::all(['email', 'password']);

        $credentialsMatch = $users->contains(function ($user) use ($submittedEmail, $submittedPassword) {
            return $user->email === $submittedEmail && $user->password === $submittedPassword;
        });

        if ($credentialsMatch) {
            // return redirect()->route('success-page')->with('success', 'Form submitted successfully.');
            return view('home',compact('submittedEmail'));
        } else {
            // return redirect()->back()->with('error', 'Invalid credentials.');
            return view('welcome');
        }
    }

    public function success()
    {
        return view('home'); 
    }
}
