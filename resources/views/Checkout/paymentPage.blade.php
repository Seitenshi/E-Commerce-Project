<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/payment_page.css">
    </head>

    <div>
        <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <a href="{{ route('cart') }}" class="button btn nav-link mx-lg-2"><i class="fa-solid fa-cart-shopping">Back to Shopping Cart</i></a><br> --}}
                            <form action="{{route('product.view')}}" method="post">
                                @csrf
                                <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                                <button type="submit">Back to Product Details</button>
                            </form>
                            <h3 class="card-title">Payment Page</h3>
                        </div>
                        <div class="card-body">
                            <h4>Item:</h4>
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
                                        <tr>
                                            <td>{{$product['prod_name']}}</td>
                                            <td>{{$quantity}}</td>
                                            <td>{{$product['prod_price']}}</td>
                                        </tr>
                                        @php
                                            $totalprice = $quantity * $product['prod_price'];
                                            $total += $totalprice;
                                        @endphp
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
                    <form action="{{route('buynow.payment')}}" method="post">
                        @csrf
                        <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                        <input type="hidden" name="total" value="{{$total}}">
                        <input type="hidden" name="quantity" value="{{$quantity}}">
                        <br>
                        <label for="ship_addr">Shipping Address: </label>
                        <input type="text" name="ship_addr" id="ship_addr" value="{{$user['user_addr']}}" required><br>
                        <span style = "color: red; font-style: italic" >*Default Address is used, but you can change the address manually</span><br><br>
                        <select name="payment_method" id="payment_method" required>
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