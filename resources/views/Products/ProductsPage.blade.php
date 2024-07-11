<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/productspage.css">
    </head>
<body>
<div>
<!--STICKY NAVBAR -->
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
                            <a class="nav-link mx-lg-2 active" href="{{ route('product.categories') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{ route('profile') }}"><img width="26" height="26" src="https://img.icons8.com/laces/64/gender-neutral-user.png" alt="gender-neutral-user"/></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cart') }}" class="button btn nav-link mx-lg-2"><img width="26" height="26" src="https://img.icons8.com/ios/50/shopping-bag--v1.png" alt="shopping-bag--v1"/></a>
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

<!-- Others Products -->

<div class="breadcrumb">
    <a href="#">Shop</a> 
    <a href="#">View Products</a><a></a> 
    <span>Summer Furniture Sale</span>
</div>

<div class="prods-container">
    <div class="section summer-furniture">
        <div class="overlay">
            <h2 class="text">SUMMER FURNITURE SALE</h2>
        </div>
        <img src="{{ asset('assets/img/filipinochairs1.png') }}" alt="Summer Furniture Sale" class="left-side">
    </div>
    <div class="right-side">
        @foreach ($products as $product)
            <div class="product">
                <img src="{{ asset('assets/img2/' . $product->image) }}" alt="{{ $product->name }}">
                <div class="product-name">{{ $product->name }}</div>
                <div class="price">₱{{ number_format($product->price, 2) }}</div>
            </div>
        @endforeach
    </div>
</div>



<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$prod_category}}</h1>
                <a href="{{ route('product.categories') }}" class="button btn">Back to Categories</a>
            </div>   
        </div>
        <br>
        @foreach ($products as $key=>$value )
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <table>
                            <tr>
                                <td colspan="2">Image</td>
                                <td colspan="2"> </td>
                                <td colspan="3">{{$value->prod_name}}</td>
                                <td>PHP {{$value->prod_price}}</td>
                                <td colspan="2"> </td>
                                <td colspan="2">
                                    <form action="{{ route('product.view') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="prod_id" value="{{$value->prod_id}}">
                                        <button type="submit">View</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <br><br>
        @endforeach
    </div>
</div>

</body>
