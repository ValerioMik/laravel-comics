<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home() {
        return view('home');
    }

    public function fumetti(){
        return view('fumetti');
    }
}
