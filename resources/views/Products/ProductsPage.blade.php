<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/productspage.css">
    </head>
<body>
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
                                    <a class="nav-link mx-lg-2" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="{{ route('logged.about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 active" aria-current="page" href="{{ route('product.categories') }}">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="{{ route('profile') }}"><img width="26" height="26" src="https://img.icons8.com/laces/64/gender-neutral-user.png" alt="gender-neutral-user"/></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cart') }}" class="button btn nav-link mx-lg-2"><img width="26" height="26" src="https://img.icons8.com/ios/50/shopping-bag--v1.png" alt="shopping-bag--v1"/><sup class="cart-count">{{$totalcart}}</sup></a>
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

<!-- Others Products -->

<div class="breadcrumb">
    <a href="{{route('product.categories')}}">Shop</a> 
    <a href="{{route('product.categories')}}">View Products</a><a></a> 
    <span>{{$prod_category}}</span>
</div>

<div class="prods-container">
    <div class="section summer-furniture">
        <div class="overlay">
            <h2 class="text">{{$prod_category}}</h2>
        </div>
        @if ($prod_category === "Mats")
            <img src="{{ asset('assets/img/wovenmats1.png') }}" alt="{{$prod_category}}" class="left-side">
        @elseif ($prod_category === "Baskets")
            <img src="{{ asset('assets/img/wovenbaskets1.png' ) }}" alt="{{$prod_category}}" class="left-side">
        @elseif ($prod_category === "Indoor Comfort")
            <img src="{{ asset('assets/img/indoorcomfort1.png' ) }}" alt="{{$prod_category}}" class="left-side">
        @elseif ($prod_category === "Others")
            <img src="{{ asset('assets/img/filipinochairs1.png' ) }}" alt="{{$prod_category}}" class="left-side">
        @elseif ($prod_category === "Tables")
            <img src="{{ asset('assets/img/tablesfil.jpg' ) }}" alt="{{$prod_category}}" class="left-side">
        @elseif ($prod_category === "Surfaces")
            <img src="{{ asset('assets/img/countertop.jpg' ) }}" alt="{{$prod_category}}" class="left-side">
        @elseif ($prod_category === "Racks")
            <img src="{{ asset('assets/img/racksprod.png' ) }}" alt="{{$prod_category}}" class="left-side">
        @elseif ($prod_category === "Outdoor Furniture")
            <img src="{{ asset('assets/img/outdoor1.jpg' ) }}" alt="{{$prod_category}}" class="left-side">
        @endif
        
    </div>
    <div class="right-side">
        @foreach ($products as $product)
            <div class="product">
                <div class="image-container">
                    <img src="{{ asset('assets/img2/' . $product->file_name) }}" alt="{{ $product->name }}">
                    <div class="overlay"></div>
                    <form action="{{ route('product.view') }}" method="post" class="view-form">
                        @csrf
                        <input type="hidden" name="prod_id" value="{{$product->prod_id}}">
                        <button type="submit" class="view-now">
                            View Product
                            <span class="first"></span>
                            <span class="second"></span>
                            <span class="third"></span>
                            <span class="fourth"></span>
                        </button>
                    </form>
                </div>
                <div class="product-name">{{ $product->prod_name }}</div>
                <div class="price">₱{{ number_format($product->prod_price, 2) }}</div>
            </div>
        @endforeach
    </div>
    
</div>
<br><br>
@include('footer')
</div>
</body>
