<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tracker;
use Hash;
use Session;

class Products extends Controller
{
    //Shows list of category i.e. Chairs, Tables, etc.
    //Click CategoryA - leads to show all products under Category A. i.e. ProductChairList
    
    public function viewCategories(){
        $totalcart = ShoppingCart::where('user_id',Session::get('LoggedUser'))->where('status','cart')->count(); //THE CART COUNT
        return view('Products.ProductCategory','totalcart');
    }

    public function viewProductsPerCategory(Request $request){
        $totalcart = ShoppingCart::where('user_id',Session::get('LoggedUser'))->where('status','cart')->count(); //THE CART COUNT
        $prod_category = $request->input('prod_category');

        $products = Product::where('prod_category', '=', $prod_category)->get();
        $pic = Product::where('prod_category', '=', $prod_category)->pluck('file_name')->first();

        Tracker::where('note', $prod_category)->increment('visits');

        return view('Products.ProductsPage', compact('prod_category','products','pic','totalcart'));
    }

    public function viewProduct(Request $request){
        $totalcart = ShoppingCart::where('user_id',Session::get('LoggedUser'))->where('status','cart')->count(); //THE CART COUNT
        $prod_id = $request->input('prod_id');
        $product = Product::where('prod_id', '=', $prod_id)->first();
        return view('Products.viewProduct', compact('product','totalcart'));
    }
}
