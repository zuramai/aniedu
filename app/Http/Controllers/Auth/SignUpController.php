<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;


class SignUpController extends Controller
{
    public function signUp() {
        return view('auth.register');
    }
}
