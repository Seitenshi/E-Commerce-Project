<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;
use Session;

class LoginAuth extends Controller
{
    //Login Controller
    public function login(){
        return view("LoginAuth.Login");
    }
    
    public function register(Request $request){
        return view("LoginAuth.Register");
    }
}
