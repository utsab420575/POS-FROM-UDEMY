<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    //
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function check_age(){
        return response("Welcome! You cross the validation");
    }
}
