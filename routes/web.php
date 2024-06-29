<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAuth;
use App\Http\Controllers\MainHome;
use App\Http\Controllers\Checkout;
use App\Http\Controllers\Products;
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

Route::get('/', function () {
    return view('Homepage');
});

//Login Auth Controller
Route::get('/login', [LoginAuth::class, 'login']) //login page
    ->middleware('userLoggedIn')
    ->name('Login');

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

//Misc
Route::get('/about', [MainHome::class, 'about']) //about us
    ->name('about');

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