<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionsController extends Controller
{
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success','Goodbye');
    }
}
