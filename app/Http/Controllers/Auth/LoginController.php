<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function loginPost(Request $request) {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if($user = Auth::attempt(['name' => $request->name, 'password' => $request->password])) {

        }
    }
}
