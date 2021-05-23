<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function home() {
        return view('game.index');
    }
    public function chooseGender() {
        if(Auth::user()->gender) return redirect()->route('game.home');
        return view('game.choose-gender');
    }
    public function setGender(Request $request) {
        $gender = $request->gender;

        $user = User::find(Auth::user()->id);
        $user->gender = $gender;
        $user->save();

        return redirect()->route('game.home');
    }
    
    public function achievements() {
        return view('game.achievements');
    }
    public function leaderboard() {
        return view('game.leaderboard');   
    }
    public function shop() {
        return view('game.shop');   
    }
    public function buy() {

    }
}
