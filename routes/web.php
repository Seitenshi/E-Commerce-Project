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

Route::get('/register', [LoginAuth::class, 'register'])
    ->name('Register');
