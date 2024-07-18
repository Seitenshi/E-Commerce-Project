<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/trial.css">
    </head>
<body>
<div>
    <!-- Sticky Nav Bar -->
    <div>
        <nav class="navbar navbar-expand-lg fixed top">
            <div class="container-fluid">
                <a class="navbar-brand ms-auto" href="#">Logo</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LOGO</h5>
                        <button type="button" class="btn-close"></button>
                    </div>
                    <div class="offcanvas-body"> 
                        <ul class="navbar-nav flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <button class="btn nav-link mx-lg-2"><i class="fa-solid fa-cart-shopping"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="loginbutton">Login</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
</div>

 <!-- Scroll break -->

 <div class="payment-container">
    <div class="progress-container">
        <!-- Progress Steps -->
        <div class="progress-step" id="step1">
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
        <div class="main-section" id="section1">
            <!-- Your Details Section Content -->
            <section class="delivery-details">
                <h2>Please Confirm or Edit Your Details</h2>
                <center><span class="def1">*Default Address is used, but you can change the address manually</span></center>
                <div class="address-info">
                    <p><strong>Delivery address:</strong></p>
                    <p>
                        First Name: {{$user['user_fname']}} <br>
                        Last Name: {{$user['user_lname']}} <br>
                        Address: {{$user['user_addr']}} <br>
                        Contact Number: {{$user['user_contact']}} <br>
                        Email: {{$user['user_email']}}
                    </p>
                    <div class="separator">
                        <div class="line"></div>
                        <span>OR</span>
                        <div class="line"></div>
                    </div>
                    <p class="des1">Enter Your Desired Address</p>
                    <div class="row g-3 desad2">
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-green desad2-input" placeholder="Address" aria-label="Address">
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control form-control-green desad2-input" placeholder="City" aria-label="City">
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
                    <button onclick="nextStep()">Continue to Shipping</button>
                </div>
            </section>
        </div>
        <!-- unahin -->
        <div class="order-summary">
            <div class="order-total">
                <span style="font-size: 23px; padding-top:16px;">Subtotal price</span>
                <span style="font-size: 30px; padding-top: 12px;">₱{{number_format($total,2)}}</span>
            </div>
            <hr>
            <h4 style="font-weight: bold;">Products</h4>
            <div class="order-items">
                @foreach ($shoppingCartItems as $key=>$value)
                    <div class="order-item">
                        @foreach ($pics as $pic)
                            @if ($value->prod_id == $pic->prod_id)
                                <img src="{{ asset('assets/img2/' . $pic->file_name) }}" alt="{{$pic->file_name}}">
                            @endif
                        @endforeach
                        <div class="item-details">
                            <div class="item-name-price">
                                <div class="item-name">{{$value->prod_name}}</div>
                                <div class="item-price">₱{{number_format($value->prod_price,2)}}</div>
                            </div>
                            <div>
                                <div class="item-quantity">Quantity: {{$value->quantity}}</div>
                            </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
                
            </div>
            
        </aside>
        
    </div>
</div>
<br><br>

<!-- SHIPPING PAGE (*PAG NAAYOS NA NI BLER IPANTAY SA LAHAT) --> 
<div class="main-section" id="section2">
    <!-- Shipping Section Content -->
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
    </section>
</div>
        <div class="delivery-summary">
            <div class="delivery-total">
                <span style="font-size: 23px; padding-top:16px;">Total price</span>
                <span style="font-size: 30px; padding-top: 12px;">₱{{number_format($total,2)}}</span>
            </div>
            <hr>
            <h4>Delivery Details</h4>
            <p>
                First Name: {{$user['user_fname']}} <br>
                Last Name: {{$user['user_lname']}} <br>
                Address: {{$user['user_addr']}} <br>
                Contact Number: {{$user['user_contact']}} <br>
                Email: {{$user['user_email']}}
            </p>
            <hr>
            <div id="delivery-method-section">
                <!-- This section is initially empty or contains a default message -->
                <h4>Delivery method</h4>
                <p>Please select a delivery method.</p>
            </div>
            <hr>
            <h4>Products</h4>
            <div class="order-items">
                @foreach ($shoppingCartItems as $key=>$value)
                    <div class="order-item">
                        @foreach ($pics as $pic)
                            @if ($value->prod_id == $pic->prod_id)
                                <img src="{{ asset('assets/img2/' . $pic->file_name) }}" alt="{{$pic->file_name}}">
                            @endif
                        @endforeach
                        <div class="item-details">
                            <div class="item-name-price">
                                <div class="item-name">{{$value->prod_name}}</div>
                                <div class="item-price">₱{{number_format($value->prod_price,2)}}</div>
                            </div>
                            <div>
                                <div class="item-quantity">Quantity: {{$value->quantity}}</div>
                            </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
        </div>
    </section>
</div>

<br><br>
<!--PAYMENT METHOODSSSSS POTAAA-->
<div class="main-section" id="section3">
    <!-- Payment Section Content -->
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
    </section>
</div>
        </div>
            <div class="delivery-summary">
                <div class="delivery-total">
                    <span style="font-size: 23px; padding-top:16px;">Total price</span>
                    <span style="font-size: 30px; padding-top: 12px;">₱{{number_format($total,2)}}</span>
                </div>
                <hr>
                <h4>Delivery Details</h4>
                <p>
                    First Name: {{$user['user_fname']}} <br>
                    Last Name: {{$user['user_lname']}} <br>
                    Address: {{$user['user_addr']}} <br>
                    Contact Number: {{$user['user_contact']}} <br>
                    Email: {{$user['user_email']}}
                </p>
                <hr>
                <div id="delivery-method-section">
                    <h4>Delivery method</h4>
                    <p>Please select a delivery method.</p>
                </div>
                <hr>
                <h4>Products</h4>
                <div class="order-items">
                    @foreach ($shoppingCartItems as $key=>$value)
                    <div class="order-item">
                        @foreach ($pics as $pic)
                            @if ($value->prod_id == $pic->prod_id)
                                <img src="{{ asset('assets/img2/' . $pic->file_name) }}" alt="{{$pic->file_name}}">
                            @endif
                        @endforeach
                        <div class="item-details">
                            <div class="item-name-price">
                                <div class="item-name">{{$value->prod_name}}</div>
                                <div class="item-price">₱{{number_format($value->prod_price,2)}}</div>
                            </div>
                            <div>
                                <div class="item-quantity">Quantity: {{$value->quantity}}</div>
                            </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
        </div>
    </section>
</div>