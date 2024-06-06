<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAuth;
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
Route::get('/login', [LoginAuth::class, 'login'])
    ->name('Login');

Route::get('/register', [LoginAuth::class, 'register']) //deprecated
    ->name('Register');

Route::post('/adduser', [LoginAuth::class, 'store']) //sign up function
    ->name('User.signup');

Route::post('/auth', [LoginAuth::class, 'loginAuth']) //sign in function
    ->name('loginAuth');