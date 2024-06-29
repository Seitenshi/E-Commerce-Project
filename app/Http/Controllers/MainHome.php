<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Auth;

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

    //Search for keywords - gives result based on keyword that is tagged on per product i.e. wood chair

    //profile
    public function profile(){

        $userId = Session::get('LoggedUser');
        $user = User::find($userId);
        if ($user) {
            return view('User.Profile', compact('user'));
        } else {
            return redirect('login')->withErrors(['message' => 'Please log in again.']);
        }
    }

    public function updateProfile(Request $request){
        $user_id = $request->input('user_id');
        $validatedData = $request->validate([
            'user_contact' => 'required|string|max:11',
            'user_addr' => 'required|string|max:255',
            'user_password' => 'required|string|min:8',
            'confirm_user_password' => 'required|same:user_password',
        ]);

        $user = User::find($user_id);

        if ($user) {
            // Update the user information
            $user->user_contact = $request->input('user_contact');
            $user->user_addr = $request->input('user_addr');
            $user->user_password = $request->input('user_password');

            $user->save();
            Session::pull('LoggedUser');
            return redirect('login')->with('success', 'Profile updated successfully.');
        } else {
            return redirect('login')->withErrors(['message' => 'User not found. Please log in again.']);
        }
    }
}
