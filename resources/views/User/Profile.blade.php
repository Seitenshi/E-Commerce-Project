<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/homepage.css">
    </head>
<div>

    <!-- Sticky Nav Bar -->
    <div class="topbar">
        <nav class="navbar navbar-expand-lg fixed top">
            <div class="container-fluid">
                <a class="navbar-brand ms-auto" href="{{ route('home') }}"><img src="/assets/img/klogo.png" height="50" width="50"></a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" aria-current="page" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="{{ route('product.categories') }}">View Product Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2 active" href="{{ route('profile') }}">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('cart') }}" class="button btn nav-link mx-lg-2"><i class="fa-solid fa-cart-shopping"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="{{ route('Logout') }}" class="loginbutton">Log out</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>

</div>

<br><br>
    
    <!-- Profile section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('update.profile') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">First Name: </label>
                        {{$user['user_fname']}}
                        <br>
                        <label for="name">Last Name: </label>
                        {{$user['user_lname']}}
                        <br>
                        <label for="name">Email: </label>
                        {{$user['user_email']}}
                        <br>
                        <label for="name">Contact Number: </label>
                        <input type="text" name="user_contact" id="user_contact" value="{{$user['user_contact']}}" required>
                        <br>
                        <label for="name">Address: </label>
                        <input type="text" name="user_addr" id="user_addr" value="{{$user['user_addr']}}" required>
                        <br>
                        <label for="name">Password: </label>
                        <input type="password" name="user_password" id="user_password" required>
                        <br>
                        <label for="name">Confirm Password: </label>
                        <input type="password" name="confirm_user_password" id="confirm_user_password" required>
                        <br>
                        <br>
                        <br>
                        <input type="hidden" name="user_id" value="{{$user['user_id']}}">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('home') }}" class="button btn">Back to home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>   

</div>
