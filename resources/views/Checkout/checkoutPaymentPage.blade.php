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

<br>


<div class="payment-container">
    <!-- progress bar wag na galawin oks na to -->
    <div class="progress-container">
        <div class="progress-step completed" id="step1">
            <div class="step-icon">
                <img width="50" height="50" src="https://img.icons8.com/ios/50/gender-neutral-user--v1.png" alt="gender-neutral-user--v1"/>
            </div>
            <div class="step-label">Your Details</div>
        </div>
        <div class="progress-line"></div>
        <div class="progress-step" id="step2">
            <div class="step-icon">
                <img width="50" height="50" src="https://img.icons8.com/ios/50/free-shipping.png" alt="free-shipping"/>
            </div>
            <div class="step-label">Shipping</div>
        </div>
        <div class="progress-line"></div>
        <div class="progress-step" id="step3">
            <div class="step-icon">
                <img width="50" height="50" src="https://img.icons8.com/ios/50/bank-card-back-side--v1.png" alt="bank-card-back-side--v1"/>
            </div>
            <div class="step-label">Payment</div>
        </div>
    </div>
    
    <div class="content">
        <div class="main-section">
            <section class="delivery-details">
                <h2>Please confirm or edit details</h2>
                <p>Delivery address will be used at the next step to finding the best delivery and pickup options.</p>
                <div class="address-info">
                    <p><strong>Delivery address</strong></p>
                    <p>
                        Daineee<br>
                        sDFEW<br>
                        MARCILLA<br>
                        Coron<br>
                        Palawan<br>
                        +63 928 739 7277<br>
                        cartz.cloud@gmail.com
                    </p>
                <button class="continue-btn">Continue to services</button>
            </section>
        </div>
        <!-- unahin -->
        <aside class="order-summary">
            <div class="order-total">
                <span style="font-size: 23px; padding-top:6px;">Subtotal price</span>
                <span style="font-size: 30px">₱2,490</span>
            </div>
            <hr>
            <h4>Products</h4>
            <div class="order-items">
                <div class="order-item">
                    <img src="assets/img2/ot1.png" alt="FRÖJERED">
                    <div class="item-details">
                        <div class="item-name-price">
                            <div class="item-name">FRÖJERED</div>
                            <div class="item-price">₱900</div>
                        </div>
                        <div>
                            <div class="item-description">Drawer front, light bamboo, 60x20 cm</div>
                            <div class="item-quantity">Quantity: 1</div>
                        </div>
                        </div>
                    </div>
                    <hr>
                    <div class="order-item">
                        <img src="assets/img2/ot2.png" alt="VOXTORP">
                        <div class="item-details">
                            <div class="item-name-price">
                                <div class="item-name">Mats</div>
                                <div class="item-price">₱900</div>
                            </div>
                            <div class="item-description">Door, walnut effect, 40x40 cm</div>
                            <div class="item-quantity">Quantity: 1</div>
                        </div>
                    </div>
                    <hr>
                    <div class="order-item">
                        <img src="assets/img2/ot3.png" alt="VÄRSTA">
                        <div class="item-details">
                            <div class="item-name-price">
                                <div class="item-name">Mats</div>
                                <div class="item-price">₱900</div>
                            </div>
                            <div class="item-description">Drawer front, stainless steel, 60x20 cm</div>
                            <div class="item-quantity">Quantity: 1</div>
                        </div>
                    </div>
                </div>
            </aside>
            
        </aside>
        
    </div>
</div>

<div class="buttons">
    <button onclick="prevStep()">Previous</button>
    <button onclick="nextStep()">Next</button>
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
<script src="/js/checkoutpage.js"></script>
</body>
