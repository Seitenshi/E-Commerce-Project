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

class Admin extends Controller
{
    public function admin() {
        // sales computation
        $totals = Transaction::all()->pluck('total');
        $totalSales = 0;
        foreach($totals as $t) {
            $totalSales += $t;
        }
        // prescriptive
    
        // total orders
        $totalOrders = ShoppingCart::where('status', 'paid')->count();
        // prescriptive
    
        // total add to carts
        $totalCart = ShoppingCart::where('status', 'cart')->count();
        // prescriptive
    
        // Site visits
        $siteVisits = Tracker::where('note', 'visit')->pluck('visits')->first();
        // prescriptive
    
        // top categories
        $categories = [
            'Baskets' => Tracker::where('note', 'Baskets')->pluck('visits')->first(),
            'Indoor Comfort' => Tracker::where('note', 'Indoor Comfort')->pluck('visits')->first(),
            'Mats' => Tracker::where('note', 'Mats')->pluck('visits')->first(),
            'Others' => Tracker::where('note', 'Others')->pluck('visits')->first(),
            'Outdoor Furniture' => Tracker::where('note', 'Outdoor Furniture')->pluck('visits')->first(),
            'Racks' => Tracker::where('note', 'Racks')->pluck('visits')->first(),
            'Surfaces' => Tracker::where('note', 'Surfaces')->pluck('visits')->first(),
            'Tables' => Tracker::where('note', 'Tables')->pluck('visits')->first(),
        ];

        $maxVisits = max($categories);
        $topCategory = array_search($maxVisits, $categories);
    
        
    
        return view('Admin.admin', compact('totalSales', 'totalOrders', 'totalCart', 'siteVisits', 'categories', 'topCategory'));
    }

    public function shipping(){
        $shipping = Transaction::all();
        return view('Admin.shipping',compact('shipping'));
    }

    public function shippingDetails(Request $request){
        $order_ids=array();
        $transaction = Transaction::where('transac_id',$request->input('id'))->first();
        $user_id = User::where('user_id',$request->input('user_id'))->first();
        $order_id = json_decode($request->input('order_ids'),true); //array of order ids

        // Check if $order_id is an array, if not, convert it to an array
        if (!is_array($order_id)) {
            $order_id = [$order_id];
        }

        $order_ids = ShoppingCart::whereIn('order_id',$order_id)->get(); //pull of order_id data

        return view('Admin.viewShippingOrder',compact('transaction','user_id','order_ids'));
    }

    public function updateShipDetails(Request $request){
        $shipping = $request->input('shipping');

        $transaction = Transaction::find($request->input('id'));
        if($transaction){
            $transaction->shipping = $shipping;

            $transaction->save();

            return redirect()->route('admin.shipping');
        }
        return redirect()->route('admin.shipping');
    }

    public function productmanagement(){
        $products = Product::all();
        return view('Admin.productmanagement',compact('products'));
    }

    public function addProduct(){ //add page

        return view('Admin.addProduct');
    }

    public function store(Request $request){ // store values /public/assets/img2/
        $prod_category = $request->input('prod_category');
        $prod_name = $request->input('prod_name');
        $prod_desc = $request->input('prod_desc');
        $prod_price = $request->input('prod_price');
        
        // Define the initial character for each category
        $category_initials = [
            'Baskets' => 'b',
            'Indoor Comfort' => 'ic',
            'Mats' => 'm',
            'Others' => 'ot',
            'Outdoor Furniture' => 'of',
            'Racks' => 'r',
            'Surfaces' => 's',
            'Tables' =>'t',
        ];

        // Get the initial characters for the given category
        $initial = $category_initials[$prod_category] ?? '';

        // Retrieve the last file name for the given category
        $last_file_name = DB::table('products')
            ->where('prod_category', $prod_category)
            ->where('file_name', 'like', "{$initial}%")
            ->orderBy('file_name', 'desc')
            ->value('file_name');

        // Extract the numeric part and increment it
        if ($last_file_name) {
            $initial_length = strlen($initial);
            $last_number = (int) substr($last_file_name, $initial_length);
        } else {
            $last_number = 0;
        }

        $new_number = $last_number + 1;
        $new_file_name = $initial . $new_number;

        // Handle file upload
        if ($request->hasFile('prod_image')) {
            $file = $request->file('prod_image');
            $extension = $file->getClientOriginalExtension();
            $new_file_name_with_extension = $new_file_name . '.' . $extension;

            // Move the file to the specified directory
            $file->move(public_path('assets/img2'), $new_file_name_with_extension);
        } else {
            return back()->withErrors(['prod_image' => 'Product image is required.']);
        }

        // Save the new product with the generated file name
        $product = new Product([
            'prod_category' => $prod_category,
            'prod_name' => $prod_name,
            'prod_desc' => $prod_desc,
            'prod_price' => $prod_price,
            'file_name' => $new_file_name_with_extension, // Save the file name with extension
        ]);

        $product->save();
        
        
        return redirect()->route('admin.product');
    }

    public function editProduct(Request $request){ // edit values

        return view('Admin.editProduct');
    }

    public function update(Request $request){ // update the values
        
        return redirect()->route('admin.product');
    }

    public function delete(Request $request){ // delete the product
        $id = $request->input('id');
        
        $product = Product::find($id);
        if($product){
            $product->delete();
        }
        return redirect()->route('admin.product');

    }
    
}
