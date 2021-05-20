<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class SignUpController extends Controller
{
    public function signUp() {
        return view('auth.register');
    }

    public function signUpPost(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', 
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => $request->password,
        ]);

        Auth::login($user);

        return redirect('/game/home');

    }
}
