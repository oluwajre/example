<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view("auth.login");
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            "email"=> ["required","email", "max:254"],
            "password"=> ["required", Password::min(8)],
        ]);

        if(! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                "email"=> "Sorry, those credentials do not match",
            ]);
        }

        $request->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy() { 

        Auth::logout();

        return redirect('/');
    }

}
