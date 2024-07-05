<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/buynow.css">
    </head>

<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Product Details</h3>
                        <form action="{{ route('product.show') }}" method="post">
                            @csrf
                            <input type="hidden" name="prod_category" value="{{$product['prod_category']}}">
                            <button type="submit">View Other Products</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <form action="{{ route('buynow.pay') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                                        <label for="name">Product Name: </label>
                                        <span>{{$product['prod_name']}}</span><br>
                                        <label for="cname">Product Category: </label>
                                        <span>{{$product['prod_category']}}</span><br>
                                        <label for="price">Product Price: </label>
                                        <span>PHP {{$product['prod_price']}}</span><br>
                                        <label for="quantity">Quantity: </label>
                                        <input type="text" name="quantity" id="quantity" value="1" placeholder="Put a valid quantity"><br><br>
                                        <button type="submit">Proceed to Payment</button><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
