<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tracker;
use Hash;
use Session;
use Auth;

class LoginAuth extends Controller
{
    //Login Controller
    public function login(){
        Tracker::where('id', '1')->increment('visits');
        return view("LoginAuth.Login");
    }
    
    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'user_fname' => 'required|string|max:255',
            'user_lname' => 'required|string|max:255',
            'user_contact' => 'required|string|max:11',
            'user_addr' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:users',
            'user_password' => 'required|string|min:8',
        ]);

        // Create the user
        $user = new User([
            'user_email' => $validatedData['user_email'],
            'user_password' => $validatedData['user_password'], // Hash the password
            'user_fname' => $validatedData['user_fname'],
            'user_lname' => $validatedData['user_lname'],
            'user_contact' => $validatedData['user_contact'],
            'user_addr' => $validatedData['user_addr'],
        ]);

        // Save the user to the database
        $user->save();

        return redirect()->route('Login')->with('success', 'Account created successfully.');
    }

    public function loginAuth(Request $request){
        $request->validate([
            'user_email' => 'required|email',
            'user_password' => 'required|min:8|max:32',
        ]);

        if($request->input('user_email') === 'admin@kalinaw.com'){
            if($request->input('user_password') === 'kalinawcrafts'){
                Session::put('LoggedUser', 'admin');
                return redirect()->route('admin');
            }else{
                //if wrong password
                return back()->withErrors(['user_password' => 'Incorrect password.']);
            }

        }else{
            $user = User::where('user_email', '=', $request->input('user_email'))->first();
            
            //check if user exists
            if($user){
                //check password
                if ($request->input('user_password') === $user->user_password){
                    //create session and store the credentials of the user
                    Session::put('LoggedUser', $user->user_id);
                    $userId = Session::get('LoggedUser');
                    return redirect()->route('home');
                }
                else{
                    //if wrong password
                    return back()->withErrors(['user_password' => 'Incorrect password.']);
                }
            }else{
                //if wrong email used
                return back()->withErrors(['user_email' => 'Email not found.']);
            }
        }
        
    }

    public function logout()
    {
        if (Session::has('LoggedUser')) {
            Session::pull('LoggedUser');
        }
        
        return redirect('login');
    }
}
