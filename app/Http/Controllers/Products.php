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

        return view('Products.ProductCategory');
    }

    public function viewProductsPerCategory(Request $request){
        $prod_category = $request->input('prod_category');

        $products = Product::where('prod_category', '=', $prod_category)->get();

        Tracker::where('note', $prod_category)->increment('visits');

        return view('Products.ProductsPage', compact('prod_category','products'));
    }

    public function viewProduct(Request $request){
        $prod_id = $request->input('prod_id');
        $product = Product::where('prod_id', '=', $prod_id)->first();
        return view('Products.viewProduct', compact('product'));
    }
}
