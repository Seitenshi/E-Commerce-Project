<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/checkout_payment.css">
    </head>
<body>
<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->

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
                                    <a class="nav-link mx-lg-2" href="{{ route('about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="{{ route('product.categories') }}">Products</a>
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
    
    </div>

<br><br>
<div class="payment-container">
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Ikea_logo.svg" alt="IKEA Logo" class="logo">
    </header>
    <div class="progress-bar">
        <div class="step active">Your Details</div>
        <div class="step">Services</div>
        <div class="step">Payment</div>
    </div>
    <section class="delivery-details">
        <h2>Please enter your delivery details</h2>
        <p>Delivery details will be used in the next step to find the best delivery and pickup options.</p>
        <form>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="amierlingad@gmail.com">
            
            <label for="fullname">Full name</label>
            <input type="text" id="fullname" name="fullname" value="AMIERJOHN LINGAD">
            
            <label for="phone">Phone number</label>
            <div class="phone-input">
                <span>PH (+63)</span>
                <input type="tel" id="phone" name="phone" value="9278413351">
            </div>
            
            <button type="submit">Proceed</button>
        </form>
    </section>
    <aside class="order-summary">
        <h3>Order Summary</h3>
        <div class="order-item">
            <div class="item-name">FRÖJERED</div>
            <div class="item-price">₱900</div>
            <div class="item-description">Drawer front, light bamboo, 60x20 cm</div>
        </div>
        <div class="order-item">
            <div class="item-name">VOXTORP</div>
            <div class="item-price">₱600</div>
            <div class="item-description">Door, walnut effect, 40x40 cm</div>
        </div>
        <div class="order-item">
            <div class="item-name">VARSTA</div>
            <div class="item-price">₱990</div>
            <div class="item-description">Drawer front, stainless steel, 60x20 cm</div>
        </div>
        <div class="order-total">
            <span>Subtotal price</span>
            <span>₱2,490</span>
        </div>
    </aside>
</div>


<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('cart') }}" class="button btn nav-link mx-lg-2"><i class="fa-solid fa-cart-shopping">Back to Shopping Cart</i></a><br>
                        <h3 class="card-title">Payment Page</h3>
                    </div>
                    <div class="card-body">
                        <h4>Items:</h4>
                        <hr>
                        <div class="row">
                            <table style="margin-left: 10px">
                                <thead>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </thead>
                                @php
                                    $total = 0;
                                @endphp
                                <tbody>
                                    @foreach($shoppingCartItems as $key=>$value)
                                    <tr>
                                        <td>{{$value->prod_name}}</td>
                                        <td>{{$value->quantity}}</td>
                                        <td>{{$value->prod_price}}</td>
                                    </tr>
                                    @php
                                        $totalprice = $value->quantity * $value->prod_price;
                                        $total += $totalprice;
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <h3>Total: PHP {{$total}}</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('payment') }}" method="post">
                    @csrf
                    @foreach ($shoppingCartItems as $key=>$value)
                        <input type="hidden" name="order_ids[]" value="{{$value->order_id}}">
                    @endforeach
                    <input type="hidden" name="total" value="{{$total}}">
                    <label for="ship_addr">Shipping Address: </label>
                    <input type="text" name="ship_addr" id="ship_addr" value="{{$user['user_addr']}}" required><br>
                    <span style = "color: red; font-style: italic" >*Default Address is used, but you can change the address manually</span><br><br>
                    <select name="payment_method" id="payment" required>
                        <option value="NaN" disabled selected>Choose Payment Method</option>
                        <option value="card">Debit/Credit Card</option>
                        <option value="cash">Cash on Delivery</option>
                    </select>
                    <button type="submit">Pay</button>
                </form>
            </div>
        </div>
    </div>
</div>
