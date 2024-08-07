<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/payment_page.css">
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
                                    <a class="nav-link mx-lg-2 active" href="{{ route('profile') }}"><img width="26" height="26" src="https://img.icons8.com/laces/64/gender-neutral-user.png" alt="gender-neutral-user"/></a>
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

<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
<br>

<div class="confirmation-message">
    <p>Thank you for ordering. You may view the order or track the shipping at <a id="profile-link" href="#">Profile</a> -> <a href="my-orders.html">My Orders</a>.</p>
</div>

<br>

<div class="invoice-container">
    <div class="invoice">
        <div class="invoice-header">
            <div class="invoice-logo">
                <img src="/assets/img/kalinawlogo2.png" alt="Kalinaw Crafts">
            </div>
        </div>
        <div class="invoice-header-bottom">
            <div class="invoice-number">Nº 123</div>
            <div class="invoice-title">Invoice</div>
        </div>
        <div class="invoice-info">
            <div class="invoice-info-left">
                <div class="invoice-info-item">
                    <span class="label">Issued</span>
                    <span>01 Jan, 2022</span>
                </div>
                <div class="invoice-info-item">
                    <span class="label">From</span>
                    <span>Name or Company<br>123 Godly St.<br>Internet, GW000<br>United States</span>
                </div>
            </div>
            <div class="invoice-info-right">
                <div class="invoice-info-item">
                    <span class="label">Due</span>
                    <span>07 Jan, 2022</span>
                </div>
                <div class="invoice-info-item">
                    <span class="label">To</span>
                    <span>Name or Company<br>123 Godly St.<br>Internet, GW000<br>United States</span>
                </div>
            </div>
        </div>
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th class="text-right">Cost</th>
                    <th class="text-right">Quantity</th>
                    <th class="text-right">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product Name</td>
                    <td class="text-right">₱1,250</td>
                    <td class="text-right">1</td>
                    <td class="text-right">₱1,250</td>
                </tr>
                <tr>
                    <td>Product Name</td>
                    <td class="text-right">₱1,250</td>
                    <td class="text-right">1</td>
                    <td class="text-right">₱1,250</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4"><hr class="line"></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right" id="pads">Subtotal</td>
                    <td class="text-right">₱2,500</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Discount</td>
                    <td class="text-right">₱0.00</td>
                </tr>
                <tr>
                    <td colspan="4"><hr class="line"></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Total</td>
                    <td class="text-right">₱2,500</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>




<br><br>


    {{-- invoice --}}


</div>
