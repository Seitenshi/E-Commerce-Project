<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Tracker;
use Hash;
use Session;
use Auth;

class MainHome extends Controller
{
    //Main Homepage Logged In
    public function homepageLogged(){
        $userId = Session::get('LoggedUser');
        $user = User::find($userId);
        $totalcart = ShoppingCart::where('user_id',Session::get('LoggedUser'))->where('status','cart')->count(); //THE CART COUNT
        return view("Homepage_login",compact('user','totalcart'));
    }

    //about us
    public function about(){
        return view("Aboutpage");
    }

    //about us
    public function aboutLogged(){
        $totalcart = ShoppingCart::where('user_id',Session::get('LoggedUser'))->where('status','cart')->count(); //THE CART COUNT
        return view("Aboutpage_login",compact('totalcart'));
    }

    //Search for keywords - gives result based on keyword that is tagged on per product i.e. wood chair

    //profile
    public function profile(){

        $userId = Session::get('LoggedUser');
        $user = User::find($userId);
        if ($user) {
            $shipping = Transaction::where('user_id',$userId)->get();
            $totalspend = Transaction::where('user_id',$userId)->pluck('total')->sum();
            $totalshipping = $shipping->count();
            $totalcart = ShoppingCart::where('user_id',Session::get('LoggedUser'))->where('status','cart')->count(); //THE CART COUNT
            return view('User.Profile', compact('user','shipping','totalshipping','totalspend','totalcart'));
        } else {
            return redirect('login')->withErrors(['message' => 'Please log in again.']);
        }
    }

    public function updateProfile(Request $request){
        $user_id = $request->input('user_id');
    
        // Validate the request data
        $validatedData = $request->validate([
            'current_password' => 'required|string',
            'user_password' => 'required|string|min:8',
            'confirm_user_password' => 'required|same:user_password',
        ]);
    
        $user = User::find($user_id);
    
        if ($user) {
            // Check if the current password matches
            if ($request->input('current_password') === $user->user_password) {
                // Update the user password
                $user->user_password = $request->input('user_password');
                $user->save();
    
                // Log out the user
                Session::pull('LoggedUser');
                return redirect('login')->with('success', 'Password updated successfully. Please log in again.');
            } else {
                return back()->withErrors(['current_password' => 'Current password is incorrect.']);
            }
        } else {
            return redirect('login')->withErrors(['message' => 'User not found. Please log in again.']);
        }
    }
    

    public function viewOrder(Request $request){
        $totalcart = ShoppingCart::where('user_id',Session::get('LoggedUser'))->where('status','cart')->count(); //THE CART COUNT
        $pics = Product::all();
        $order_ids=array();
        $transaction = Transaction::where('transac_id',$request->input('id'))->first();
        $user_id = User::where('user_id',Session::get('LoggedUser'))->first();
        $order_id = json_decode($request->input('order_ids'),true); //array of order ids
        $pics = Product::all();

        // Check if $order_id is an array, if not, convert it to an array
        if (!is_array($order_id)) {
            $order_id = [$order_id];
        }

        $order_ids = ShoppingCart::whereIn('order_id',$order_id)->get(); //pull of order_id data

        return view('User.viewOrder',compact('transaction','user_id','order_ids','pics','totalcart'));
    }

    //store locator

    public function locator(){
        
        return view('storeLocator');
    }
}
