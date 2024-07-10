<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        return view('Admin.shipping');
    }

    public function productmanagement(){

        return view('Admin.productmanagement');
    }
    
}
