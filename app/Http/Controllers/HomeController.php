<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function aboutAndContact() {
        return view('aboutAndContact');
    }
    
    public function dasarAljabar() {
        return view('dasarAljabar');
    }
    
    public function konversiPecahan() {
        return view('konversiPecahan');
    }


    public function konsepAljabar() {

    }

}
