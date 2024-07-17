<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/shopcart.css">
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
                                    <a class="nav-link mx-lg-2" aria-current="page" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="{{ route('logged.about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="{{ route('product.categories') }}">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="{{ route('profile') }}"><img width="26" height="26" src="https://img.icons8.com/laces/64/gender-neutral-user.png" alt="gender-neutral-user"/></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cart') }}" class="button btn nav-link mx-lg-2 active"><img width="26" height="26" src="https://img.icons8.com/ios/50/shopping-bag--v1.png" alt="shopping-bag--v1"/><sup class="cart-count">{{$totalcart}}</sup></a>
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
<div class="shopcart-container">
    <div class="shopping-cart">
        <h1>Shopping Cart</h1>
        <table class="product-table">
            <thead>
                <tr>
                    <th>PRODUCT DETAILS</th>
                    <th>QUANTITY</th>
                    <th>PRICE</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $key=>$value )
                    <tr>
                        <td class="product-info">
                            @foreach ($pics as $pic)
                                @if ($value->prod_id == $pic->prod_id)
                                    <img src="{{ asset('assets/img2/' . $pic->file_name) }}" alt="{{$pic->file_name}}">
                                @endif
                            @endforeach
                            <div class="product-description">
                                <input type="checkbox" class="select-item order-checkbox" name="order_id" data-price="{{ $value->prod_price }}" data-quantity="{{ $value->quantity }}" id="order_id_{{$value->order_id}}" value="{{$value->order_id}}">
                                <h2>{{$value->prod_name}}</h2>
                                {{-- remove link --}}
                                <form action="{{ route('cart.remove') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="order_id" value="{{$value->order_id}}">
                                    <button type="submit" class="remove-link">Remove</button>
                                </form>
                            </div>
                        </td>
                        <td class="product-quantity">
                            <input type="number" value="{{$value->quantity}}" min="1" disabled>
                        </td>
                        <td class="product-price">P{{$value->prod_price}}</td>
                        <td class="product-total">P{{$value->prod_price / $value->quantity }}</td>
                    </tr>       
                @endforeach
                    
            </tbody>
        </table>
        <a href="{{ route('product.categories') }}" class="continue-shopping">← CONTINUE SHOPPING</a>
    </div>
    <div class="order-summary">
        <h2>Order Summary</h2>
        <hr>
        <div class="summary-item">
            <span>ITEMS</span>
            <span id="quan">0</span>
        </div>
        <div class="summary-item">
            <span>SHIPPING</span>
            <span>Standard - LalaMove</span>
        </div>
        <div class="summary-item total">
            <span>TOTAL COST</span>
            <span>P<span id="total">0</span></span>
        </div>
        <form action="{{ route('checkout') }}" method="post" id="checkout-form">
            @csrf
            <button class="checkout" type="submit">CHECKOUT</button>
        </form>
        <div class="promo-code">
            <input type="text" placeholder="PROMOTIONAL CODE">
            <button>APPLY</button>
        </div>
    </div>
</div>

<br><br>
@include('footer')
<script src="/js/shoppingcart.js"></script>
</body>