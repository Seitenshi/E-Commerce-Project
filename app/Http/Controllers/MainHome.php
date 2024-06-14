<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainHome extends Controller
{
    //Main Homepage Logged In
    public function homepageLogged(){
        return view("Homepage_login");
    }

    //about us
    public function about(){
        return view("Aboutpage");
    }
}
