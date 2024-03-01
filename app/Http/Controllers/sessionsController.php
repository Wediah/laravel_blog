<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class sessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();
            return redirect('/')->with('success', 'Welcome Back');
        }

        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);
    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success','Goodbye');
    }
}
