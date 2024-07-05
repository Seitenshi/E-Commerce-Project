<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/viewproduct.css">
    </head>

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
                            <a class="nav-link mx-lg-2 active" href="{{ route('product.categories') }}">View Product Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{ route('profile') }}">Profile</a>
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


    <div class="container">
        <a href="{{ route('product.categories') }}" class="button btn">Back to Categories</a>
        <!-- Product Name --> 
        <div class="row">
            <div class="col-md-12">
                <span><h1>{{$product['prod_name']}}</h1></span>
            </div>
        </div>
        <hr>
        <br>
        <!-- Product Image & Buy Now / Add to Cart--> 
        <div class="row"><!-- gawin mo nalang inline dito para magpantay yung both div--> 
            <div class="col-md-6">
                {{-- <img src="{{asset('images/'.$product['prod_image'])}}" class="img-responsive"> --}}
                Image here
            </div>

            <div class="col-md-6">
                {{-- Buy Now --}}
                <form action="{{route('buynow')}}" method="post">
                    @csrf
                    <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                    <button type="submit">Buy Now</button>
                </form>

                {{-- Add to Cart --}}
                <form action="{{ route('cart.productdetail') }}" method="post">
                    @csrf
                    <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                    <button type="submit">Add to Cart</button>
                </form>

            </div>
        </div>
        <hr>
        <!-- Product Description --> 
        <div class="row">
            <div class="col-md-12">
                <span><h3>Description</h3></span>
                <p>{{$product['prod_desc']}}</p>
            </div>
        </div>
    </div>
</div>
