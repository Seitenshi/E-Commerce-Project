<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->

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
                            <table>
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
                    <select name="payment_method" id="payment">
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
