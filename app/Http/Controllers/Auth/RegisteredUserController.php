<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rules\Password;


class RegisteredUserController extends Controller
{
    public function create() {
        return view("auth.register");
    }

    public function store(Request $request) {
        $attributes = $request->validate([
            "first_name" => ["required","string"],
            "last_name"=>  ["required","string"],
            "email"=> ["required","email", "max:254"],
            "password"=> ["required", Password::min(8), "confirmed"],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/jobs');
    }

}
