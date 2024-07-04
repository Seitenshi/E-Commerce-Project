<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/shopcart.css">
    </head>

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
                                <a class="nav-link mx-lg-2" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="{{ route('product.categories') }}">View Product Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="{{ route('profile') }}">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('cart') }}" class="button btn nav-link mx-lg-2 active"><i class="fa-solid fa-cart-shopping"></i></a>
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


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Your Cart</h1>
                <a href="{{ route('home') }}" class="button btn">Back to Home</a>
                <hr>
            </div>   
        </div>
        <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{-- Cart Items --}}
                        <table>
                            <thead>
                                <th></th>
                                <th colspan="2">Preview</th>
                                <th colspan="2"></th>
                                <th colspan="3">Product Name</th>
                                <th>Product Price</th>
                                <th colspan="2"></th>
                                <th colspan="2">Quantity</th>
                                <th colspan="2">Actions</th>
                            </thead>
                            <tbody>
                                @foreach ($items as $key=>$value )
                                    <tr>
                                        <td><input type="checkbox" name="order_id" class="order-checkbox" data-price="{{ $value->prod_price }}" data-quantity="{{ $value->quantity }}" id="order_id_{{$value->order_id}}" value="{{$value->order_id}}"></td>
                                        <td colspan="2">Image</td>
                                        <td colspan="2"> </td>
                                        <td colspan="3">{{$value->prod_name}}</td>
                                        <td id="order_id_{{$value->order_id}}_price">PHP {{$value->prod_price}}</td>
                                        <td colspan="2"></td>
                                        <td colspan="2" id="order_id_{{$value->order_id}}_quantity">{{$value->quantity}}</td>
                                        <td colspan="2">
                                            <form action="{{ route('cart.remove') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="order_id" value="{{$value->order_id}}">
                                                <button type="submit">Remove</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- total product calculation --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h3>Total: PHP <span id="total">0</span></h3>
                    </div>
                    <div class="card">
                        <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                            @csrf
                            <button type="submit">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>

    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('.order-checkbox');
        const totalSpan = document.getElementById('total');
        const checkoutForm = document.getElementById('checkout-form');
    
        function calculateTotal() {
            let total = 0;
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    const price = parseFloat(checkbox.getAttribute('data-price'));
                    const quantity = parseInt(checkbox.getAttribute('data-quantity'));
                    total += price * quantity;
                }
            });
            totalSpan.textContent = total.toFixed(2);
        }
    
        function updateHiddenInputs() {
            // Clear previous hidden inputs
            document.querySelectorAll('.order-input').forEach(function(input) {
                input.remove();
            });
    
            // Add new hidden inputs for checked checkboxes
            checkboxes.forEach(function(checkbox) {
                if (checkbox.checked) {
                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = 'order_ids[]';
                    hiddenInput.value = checkbox.value;
                    hiddenInput.classList.add('order-input');
                    checkoutForm.appendChild(hiddenInput);
                }
            });
        }
    
        function handleCheckboxChange() {
            calculateTotal();
            updateHiddenInputs();
        }
    
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', handleCheckboxChange);
        });
    
        handleCheckboxChange();
    });
</script>
