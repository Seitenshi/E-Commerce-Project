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
                <img width="50" height="50" src="https://img.icons8.com/windows/32/truck.png" alt="truck"/>
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
                <h2>Please Confirm or Edit Your Details</h2>
                <center><span class="def1">*Default Address is used, but you can change the address manually</span></center>
                <div class="address-info">
                    <p><strong>Delivery address:</strong></p>
                    <p>
                        Daineee<br>
                        sDFEW<br>
                        MARCILLA<br>
                        Coron<br>
                        Palawan<br>
                        +63 928 739 7277<br>
                        cartz.cloud@gmail.com
                    </p>
                    <div class="separator">
                        <div class="line"></div>
                        <span>OR</span>
                        <div class="line"></div>
                    </div>
                    <p class="des1">Enter Your Desired Address</p>
                    <div class="row g-3 desad2">
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-green desad2-input" placeholder="City" aria-label="City">
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control form-control-green desad2-input" placeholder="State" aria-label="State">
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control form-control-green desad2-input" placeholder="Zip" aria-label="Zip">
                        </div>
                    </div>
                    
                      </div><br>
                      <div class="progressbuttns">
                        <span>
                            <button>
                                <img class="progcon" src="assets/img/leftarrow.png" alt="Left Arrow"/>Back to Shopping Cart
                            </button>
                        </span>
                        {{-- <button onclick="prevStep()">Previous</button> BLER ILAGAY MO LANG TO SA SHIPPING AND PAYMENT PAGE --}} 
                        <button onclick="nextStep()">Continue to Shipping</button>
                    </div>
                    
            </section>
        </div>
        <!-- unahin -->
        <div class="order-summary">
            <div class="order-total">
                <span style="font-size: 23px; padding-top:16px;">Subtotal price</span>
                <span style="font-size: 30px; padding-top: 12px;">₱2,490</span>
            </div>
            <hr>
            <h4 style="font-weight: bold;">Products</h4>
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
            </div>
            
        </aside>
        
    </div>
</div>
<br><br>

<!-- SHIPPING PAGE (*PAG NAAYOS NA NI BLER IPANTAY SA LAHAT) --> 
<div class="payship-container">
    <section class="shipping-section">
        <div class="shipping-container">
            <h2>How would you like to receive your order?</h2>
            <div class="option" id="click-collect" onclick="selectDeliveryMethod('click-collect')">
                <label>
                    <div class="label-content">
                        <span>Pick-It-Up Parcel</span>
                        <p>You can pick-up your parcel on our warehouse store.</p>
                    </div>
                    <span class="price">₱0</span>
                </label>
            </div>
            <div class="option" id="parcel-delivery" onclick="selectDeliveryMethod('parcel-delivery')">
                <label>
                    <div class="label-content">
                        <span>Parcel Delivery</span>
                        <p>Delivered within 2-17 days. The Price May Vary Depending on your location.</p>
                    </div>
                    <span class="price">₱250-₱500</span>
                </label>
            </div>
            <div class="acknowledgement">
                <input type="checkbox" id="acknowledge" name="acknowledge">
                <label for="acknowledge">
                    I acknowledge my responsibility that all of my details are true and I am not a bogus-buyer prior to the delivery date, and this includes prepaying any related fees.
                </label>
            </div>
            <div class="progressbuttns">
                <span>
                    <button>
                        <img class="progcon" src="assets/img/leftarrow.png" alt="Left Arrow"/>Back to Shopping Cart
                    </button>
                </span>
                <button onclick="prevStep()">Previous</button>
                <button id="payment-button" onclick="nextStep()">Continue to Payment</button>
            </div>
            
        </div>

        <div class="delivery-summary">
            <div class="delivery-total">
                <span style="font-size: 23px; padding-top:16px;">Total price</span>
                <span style="font-size: 30px; padding-top: 12px;">₱2,490</span>
            </div>
            <hr>
            <h4>Delivery Details</h4>
            <p>Daineee</p>
            <p>sDFEW</p>
            <p>MARCILLA</p>
            <p>Coron</p>
            <p>Palawan</p>
            <p>+63 928 739 7277</p>
            <p>cartz.cloud@gmail.com</p>
            <hr>
            <div id="delivery-method-section">
                <!-- This section is initially empty or contains a default message -->
                <h4>Delivery method</h4>
                <p>Please select a delivery method.</p>
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
        </div>
    </section>
</div>

<br><br>
<!--PAYMENT METHOODSSSSS POTAAA-->
<div class="payments-container">
    <section class="shipping-payment-section">
        <div class="left-panel">
            <div class="payments2-container">
                <h2>Choose Your Payment Method</h2>
                <div class="option" id="credit-card" onclick="selectPaymentMethod('credit-card')">
                    <label>
                        <div class="label-content">
                            <span>Credit Card</span>
                            <p>Pay securely using your credit card. Via Visa or Mastercard.</p>
                        </div>
                    </label>
                </div>
                <div class="option" id="paypal" onclick="selectPaymentMethod('paypal')">
                    <label>
                        <div class="label-content">
                            <span>PayPal</span>
                            <p>Checkout using your PayPal account.</p>
                        </div>
                    </label>
                </div>
                <div class="option" id="bank-transfer" onclick="selectPaymentMethod('bank-transfer')">
                    <label>
                        <div class="label-content">
                            <span>GCash</span>
                            <p>Log in to your Account first.</p>
                        </div>
                    </label>
                </div>
                
                <div id="credit-card-form" class="credit-card-form">
                    <h2>Please, enter your card details</h2>
                    <form>
                        <div class="mb-3">
                            <label for="card-number" class="form-label">Card Number</label>
                            <input type="text" class="form-control form-control-green" id="card-number" name="card-number" placeholder="Card Number" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="expiry-date" class="form-label">Expiry Date</label>
                            <input type="text" class="form-control form-control-green" id="expiry-date" name="expiry-date" placeholder="MM / YY" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="cvc" class="form-label">CVC</label>
                            <input type="text" class="form-control form-control-green" id="cvc" name="cvc" placeholder="CVC" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="cardholder-name" class="form-label">Cardholder Name</label>
                            <input type="text" class="form-control form-control-green" id="cardholder-name" name="cardholder-name" placeholder="Cardholder Name" required>
                        </div>
                        
                        <h3>Billing Address</h3>
                        <div class="mb-3">
                            <label for="full-name" class="form-label">Full Name</label>
                            <input type="text" class="form-control form-control-green" id="full-name" name="full-name" placeholder="Full Name">
                        </div>
                        
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control form-control-green" id="city" name="city" placeholder="City">
                        </div>
                        
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control form-control-green" id="address" name="address" placeholder="Address">
                        </div>
                        
                        <div class="mb-3">
                            <label for="postal-code" class="form-label">Postal Code</label>
                            <input type="text" class="form-control form-control-green" id="postal-code" name="postal-code" placeholder="Postal Code">
                        </div>
                        
                        <div class="acknowledgement">
                            <input type="checkbox" id="agree-checkbox" required>
                            <label for="agree-checkbox">I agree to the <a href="#" class="hunder">Privacy Policy</a>, <a href="#" class="hunder">Terms & Conditions</a> and <a href="#" class="hunder">Service Policy</a></label>
                        </div>
                    </form>
            </div>
            <div class="progressbuttns" id="progress-buttons">
                <span>
                    <button>
                        <img class="progcon" src="assets/img/leftarrow.png" alt="Left Arrow"/>Back to Shopping Cart
                    </button>
                </span>
                <button onclick="prevStep()">Previous</button>
                <button onclick="nextStep()">Pay Now</button>
            </div>
        </div>
        </div>
            <div class="delivery-summary">
                <div class="delivery-total">
                    <span style="font-size: 23px; padding-top:16px;">Total price</span>
                    <span style="font-size: 30px; padding-top: 12px;">₱2,490</span>
                </div>
                <hr>
                <h4>Delivery Details</h4>
                <p>Daineee</p>
                <p>sDFEW</p>
                <p>MARCILLA</p>
                <p>Coron</p>
                <p>Palawan</p>
                <p>+63 928 739 7277</p>
                <p>cartz.cloud@gmail.com</p>
                <hr>
                <div id="delivery-method-section">
                    <h4>Delivery method</h4>
                    <p>Please select a delivery method.</p>
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
            </div>
        </div>
    </section>
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
