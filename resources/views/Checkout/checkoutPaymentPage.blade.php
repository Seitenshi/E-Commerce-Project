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
    <div class="progress-container">
        <div class="progress-step completed">
            <div class="step-icon"><span>&#10003;</span></div>
            <div class="step-label">Details</div>
        </div>
        <div class="progress-line"></div>
        <div class="progress-step">
            <div class="step-icon"><img src="path/to/services-icon.png" alt="Services Icon"></div>
            <div class="step-label">Services</div>
        </div>
        <div class="progress-line"></div>
        <div class="progress-step">
            <div class="step-icon"><img src="path/to/payment-icon.png" alt="Payment Icon"></div>
            <div class="step-label">Payment</div>
        </div>
    </div>
    <div class="content">
        <div class="main-section">
            <div class="notification">
                <p><strong>Get ready to receive your delivery.</strong><br>
                Please prepare the necessary permits and additional fees for your delivery. <a href="#">Learn more.</a></p>
                <button class="close-btn">&times;</button>
            </div>
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
                    <button class="edit-btn">Edit</button>
                    <p class="pinpoint">📍 Pinpoint not added</p>
                    <button class="address-btn">Select a different address</button>
                    <p><strong>Order confirmation email</strong></p>
                    <p>cartz.cloud@gmail.com</p>
                </div>
                <button class="continue-btn">Continue to services</button>
            </section>
        </div>
        <aside class="order-summary">
            <h3>Order Summary</h3>
            <div class="order-total">
                <span>Total price</span>
                <span>₱410</span>
            </div>
            <p>Incl. VAT %</p>
            <div class="delivery-info">
                <h4>Delivery details</h4>
                <p>
                    Daineee<br>
                    sDFEW<br>
                    MARCILLA<br>
                    Coron<br>
                    Palawan<br>
                    +63 928 739 7277<br>
                    cartz.cloud@gmail.com
                </p>
                <h4>Delivery method</h4>
                <p>Parcel delivery<br>Expected delivery time<br>2-17 days</p>
            </div>
            <h4>Products</h4>
            <div class="order-item">
                <img src="path/to/mopsig-image.png" alt="MOPSIG">
                <div>
                    <div class="item-name">MOPSIG</div>
                    <div class="item-price">₱150</div>
                    <div class="item-description">12-piece flatware set</div>
                    <div class="item-quantity">Qty: 1</div>
                </div>
            </div>
            <div class="order-item">
                <img src="path/to/prickig-image.png" alt="PRICKIG">
                <div>
                    <div class="item-name">PRICKIG</div>
                    <div class="item-price">₱60</div>
                    <div class="item-description">Microwave lid, gray, 26 cm</div>
                    <div class="item-quantity">Qty: 1</div>
                </div>
            </div>
            <div class="order-item">
                <img src="path/to/spruttig-image.png" alt="SPRUTTIG">
                <div>
                    <div class="item-name">SPRUTTIG</div>
                    <div class="item-price">₱100</div>
                    <div class="item-description">Hanger, black</div>
                    <div class="item-quantity">₱100/10 pieces</div>
                </div>
            </div>
        </aside>
    </div>
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
