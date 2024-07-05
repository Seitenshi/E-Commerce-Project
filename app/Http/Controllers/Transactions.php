<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\User;
use App\Models\Transaction;
use Hash;
use Session;


class Transactions extends Controller
{
    //payment function
    public function payment(Request $request){
        $userId = Session::get('LoggedUser');//user id
        $orderIds = $request->input('order_ids', []); //order ids - array
        $j_orderIds = json_encode($orderIds, true); //encoded json for transaction items
        $ldate = date('Y-m-d'); //date ordered
        $method = $request->input('payment_method'); //method
        $total = $request->input('total'); //total price
        $ship = $request->input('ship_addr'); //shipping address

        $transaction = new Transaction([
            'user_id' => $userId,
            'order_id' => $j_orderIds,
            'date_ordered' => $ldate,
            'method'=> $method,
            'total' => $total,
            'ship_addr' => $ship,
        ]);

        $transaction_deets = array([
            'user_id' => $userId,
            'date_ordered' => $ldate,
            'method'=> $method,
            'total' => $total,
            'ship_addr' => $ship,
        ]);
        
        $transaction->save();

        //change the orderId status to paid
        foreach($orderIds as $id){
            $order = ShoppingCart::find($id);
            $order->status = 'paid';
            $order->save();
        }

        return view('Checkout.completePayment', compact('transaction_deets', 'orderIds'));
    }

    //Buy Now page
    public function buyNow(Request $request){
        $product = Product::where('prod_id', '=', $request->input('prod_id'))->first(); // get product details
        

        return view('Checkout.buyNow',compact('product'));
    }

    //Buy Now Payment Page
    public function buyNowPayment(Request $request){
        $userId = Session::get('LoggedUser');//user id
        $user = User::where('user_id','=', $userId)->first();
        $product = Product::where('prod_id', '=', $request->input('prod_id'))->first(); // get product details
        $quantity = $request->input('quantity');
        

        return view('Checkout.paymentPage',compact('product','user','quantity'));
    }

    //payment function - buynow
    public function paymentBuyNow(Request $request){
        $userId = Session::get('LoggedUser');//user id
        $ldate = date('Y-m-d'); //date ordered
        $method = $request->input('payment_method'); //method
        $total = $request->input('total'); //total price
        $ship = $request->input('ship_addr'); //shipping address
        
        //ORDER DB creation
        $prod_id = $request->input('prod_id'); //product id
        $product = Product::where('prod_id', '=', $prod_id)->first();
        $prod_name = $product['prod_name'];
        $prod_price = $product['prod_price'];
        $prod_category = $product['prod_category'];
        $quantity = $request->input('quantity'); 

        //save new order
        $cart_product = new ShoppingCart([
            'user_id' => $userId,
            'prod_id' => $prod_id,
            'prod_category' => $prod_category,
            'prod_name' => $prod_name,
            'prod_price' => $prod_price,
            'quantity' => $quantity,
            'status' => 'paid',
        ]);
        $cart_product->save();

        // Get the order ID of the newly saved data
        $order_id = $cart_product->order_id;  
        $j_order_id = json_encode($order_id,true); //REMINDER: IN PULLING ORDERS - PUT CHECKING IF ARRAY OR NOT, IF JSON TEXT OR NOT

        //Transaction creation
        $transaction = new Transaction([
            'user_id' => $userId,
            'order_id' => $j_order_id,
            'date_ordered' => $ldate,
            'method'=> $method,
            'total' => $total,
            'ship_addr' => $ship,
        ]);

        $transaction_deets = array([
            'user_id' => $userId,
            'date_ordered' => $ldate,
            'method'=> $method,
            'total' => $total,
            'ship_addr' => $ship,
        ]);
        
        $transaction->save(); 

        return view('Checkout.completePayment', compact('transaction_deets', 'order_id'));
    }
}
