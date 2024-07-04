<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\User;
use Hash;
use Session;

class Checkout extends Controller
{
    //Checkout functions
    public function viewShoppingCart(){
        $userId = Session::get('LoggedUser');
        $items = ShoppingCart::where('user_id', '=', $userId)->where('status','=','cart')->get();

        return view('Checkout.shoppingCart', compact('items'));
    }

    //Add to Cart button - add item to cart
    //Buy now button - directs to checkout page (require to select quantity or color if applicable)
    //Bottom part of product page - shows similar products you might like - hyperlinks to other pages

    //view product detail
    public function productDetail(Request $request){
        $prod_id = $request->input('prod_id');
        $product = Product::where('prod_id', '=', $prod_id)->first();

        return view('Checkout.addToCart', compact('product'));
    }

    //add product to cart
    public function addProduct(Request $request){
        $prod_id = $request->input('prod_id');
        $product = Product::where('prod_id', '=', $prod_id)->first();
        $userId = Session::get('LoggedUser');
        $quantity = $request->input('quantity');
        $prod_name = $product['prod_name'];
        $prod_price = $product['prod_price'];
        $prod_category = $product['prod_category'];

        //create data array
        $cart_product = new ShoppingCart([
            'user_id' => $userId,
            'prod_id' => $prod_id,
            'prod_category' => $prod_category,
            'prod_name' => $prod_name,
            'prod_price' => $prod_price,
            'quantity' => $quantity,
        ]);

        //save to database
        $cart_product->save();

        return redirect()->route('cart')->with('success', 'Product added successfully.');
    }

    //remove item from cart
    public function remove(Request $request){
        $item = ShoppingCart::find($request->input('order_id'));

        if (!$item) {
            //exception handling
            return redirect()->route('cart')->with('error', 'Product not found');
        }

        $item->delete();

        return redirect()->route('cart')->with('success', 'Product removed successfully');
    }

    //checkout function 
    public function checkout(Request $request){
        $userId = Session::get('LoggedUser');
        $user = User::find($userId); // get addr
        
        $orderIds = $request->input('order_ids', []); //array can turn into json or just string for transaction table
        $shoppingCartItems = ShoppingCart::whereIn('order_id', $orderIds)->get();

        return view('Checkout.checkoutPaymentPage', compact('user','shoppingCartItems'));
    }

}
