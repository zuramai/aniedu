<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function home() {
        return view('game.index');
    }
    public function chooseGender() {

    }
    public function setGender() {

    }
    
    public function achievements() {
        return view('game.achievements');
    }
    public function leaderboard() {
        
    }
    public function shop() {

    }
    public function buy() {

    }
}
