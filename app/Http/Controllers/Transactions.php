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
}
