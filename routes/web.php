<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tracker;
use App\Http\Controllers\LoginAuth;
use App\Http\Controllers\MainHome;
use App\Http\Controllers\Checkout;
use App\Http\Controllers\Products;
use App\Http\Controllers\Transactions;
use App\Http\Controllers\Admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'noBack'], function () {
    // Routes that should not be accessed after logging in
    Route::get('/', function () {//index
        Tracker::where('note', 'visit')->increment('visits');
        return view('Homepage');
    })->middleware('userNotLoggedIn')->name('index');

    Route::get('/login', [LoginAuth::class, 'login']) //login page
    ->middleware('userLoggedIn')
    ->name('Login');
});

//Login Auth Controller
Route::get('/logout', [LoginAuth::class, 'logout'])->name('Logout');; //logout

Route::post('/adduser', [LoginAuth::class, 'store']) //sign up function
    ->middleware('userLoggedIn')
    ->name('User.signup');

Route::post('/auth', [LoginAuth::class, 'loginAuth']) //sign in function
    ->middleware('userLoggedIn')
    ->name('loginAuth');

//Homepage - logged in
Route::get('/home', [MainHome::class, 'homepageLogged']) //homepage logged in
    ->middleware('isLoggedIn', 'noBack')
    ->name('home');

//Profile
Route::get('/profile', [MainHome::class, 'profile']) //view profile
    ->middleware('isLoggedIn')
    ->name('profile');

Route::post('/profile/update', [MainHome::class, 'updateProfile']) //Update profile
    ->middleware('isLoggedIn')
    ->name('update.profile');

Route::get('/cart/return', [Transactions::class, 'returnCancellation']) //return page
    ->middleware('isLoggedIn')
    ->name('cart.return');

//Misc
Route::get('/about', [MainHome::class, 'about']) //about us
    ->name('about');

Route::get('/aboutpage', [MainHome::class, 'aboutLogged']) //About us logged in
    ->middleware('isLoggedIn') 
    ->name('logged.about');

Route::get('/locator', [MainHome::class, 'locator']) //locator
    ->name('locator');

Route::post('/profile/viewOrder', [MainHome::class, 'viewOrder']) //View Order Profile
    ->middleware('isLoggedIn')
    ->name('user.viewOrder');


//Product Functions
Route::get('/categories', [Products::class, 'viewCategories']) //view Categories
    ->middleware('isLoggedIn') 
    ->name('product.categories');

Route::post('/categories/products', [Products::class, 'viewProductsPerCategory']) //View Products under category
    ->middleware('isLoggedIn')
    ->name('product.show');
    
Route::post('/categories/products/view', [Products::class, 'viewProduct']) //View Product
    ->middleware('isLoggedIn')
    ->name('product.view');

//Checkout Functions
Route::get('/cart', [Checkout::class, 'viewShoppingCart']) //view shopping cart
    ->middleware('isLoggedIn')
    ->name('cart');

Route::post('/cart/product/details', [Checkout::class, 'productDetail']) //Product Checking before add to cart
    ->middleware('isLoggedIn')
    ->name('cart.productdetail');

Route::post('/cart/addproduct', [Checkout::class, 'addProduct']) //Add to cart function
    ->middleware('isLoggedIn')
    ->name('cart.add');

Route::post('/cart/removeproduct', [Checkout::class, 'remove']) //Remove from cart function
    ->middleware('isLoggedIn')
    ->name('cart.remove');

Route::post('/checkout', [Checkout::class, 'checkout']) //go to checkout page
    ->middleware('isLoggedIn')
    ->name('checkout');

Route::post('/checkout/payment', [Transactions::class, 'payment']) //go to complete payment page - from cart
    ->middleware('isLoggedIn')
    ->name('payment');

//Buy Now - checkout Functions
Route::post('/buyNow', [Transactions::class, 'buyNow']) //Buy Now page
    ->middleware('isLoggedIn')
    ->name('buynow');

Route::post('/buyNow/paymentPage', [Transactions::class, 'buyNowPayment']) //go to checkout page - from buy now
    ->middleware('isLoggedIn')
    ->name('buynow.pay');

Route::post('/buyNow/payment', [Transactions::class, 'paymentBuyNow']) //go to payment page - from buy now
    ->middleware('isLoggedIn')
    ->name('buynow.payment');

//Admin
Route::get('/admin', [Admin::class, 'admin']) //Admin Page
    ->middleware('isLoggedIn')
    ->name('admin');

Route::get('/admin/shipping', [Admin::class, 'shipping']) //Admin Shipping page
    ->middleware('isLoggedIn')
    ->name('admin.shipping');

Route::post('/admin/shipping/view', [Admin::class, 'shippingDetails']) //Admin view order Ship page
    ->middleware('isLoggedIn')
    ->name('admin.shippingView');

Route::post('/admin/shipping/view/change', [Admin::class, 'updateShipDetails']) //update shipping status
    ->middleware('isLoggedIn')
    ->name('admin.shippingUpdate');

Route::get('/admin/products', [Admin::class, 'productmanagement']) //Admin Product Management
    ->middleware('isLoggedIn')
    ->name('admin.product');

Route::get('/admin/products/add', [Admin::class, 'addProduct']) //Admin add Product page
    ->middleware('isLoggedIn')
    ->name('admin.addproduct');

Route::post('/admin/products/add/store', [Admin::class, 'store']) //Admin store Product 
    ->middleware('isLoggedIn')
    ->name('admin.store');

Route::post('/admin/products/edit', [Admin::class, 'editProduct']) //Admin edit Product page
    ->middleware('isLoggedIn')
    ->name('admin.editproduct');

Route::post('/admin/products/edit/store', [Admin::class, 'update']) //Admin store edit Product 
    ->middleware('isLoggedIn')
    ->name('admin.update');

Route::post('/admin/products/delete', [Admin::class, 'delete']) //Admin delete Product 
    ->middleware('isLoggedIn')
    ->name('admin.delete');