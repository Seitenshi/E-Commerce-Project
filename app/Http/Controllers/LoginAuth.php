<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class LoginAuth extends Controller
{
    //Login Controller
    public function login(){
        return view("LoginAuth.Login");
    }
    
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'user_email' => 'required|email',
            'user_password' => 'required|min:8|max:32',
            'user_fname' => 'required',
            'user_lname' => 'required',
            'user_contact' => 'required|numeric|max:11',
            'user_addr' => 'required',
        ]);

        // Create the user
        User::create([
            'user_email' => $request->input('user_email'),
            'user_password' => $request->input('user_password'),
            'user_fname' => $request->input('user_fname'),
            'user_lname' => $request->input('user_lname'),
            'user_contact' => $request->input('user_contact'),
            'user_addr' => $request->input('user_addr'),
        ]);

        return redirect('/login');
    }

    public function loginAuth(Request $request){
        $request->validate([
            'user_email' => 'required|email',
            'user_password' => 'required|min:8|max:32',
        ]);

        
    }
}
