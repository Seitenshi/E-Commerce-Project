<head>
    @include('Paks')
    <link rel="stylesheet" href="/css/profile.css">
</head>

<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center><h2>Order Details</h2></center>
                <div class="card">
                    <div class="card-body">
                        <span><h6>Transaction #{{$transaction['transac_id']}}</h6></span>
                        <span><h6>Ordered By: {{$user_id['user_fname'].' '.$user_id['user_lname']}}</h6></span>
                        <span><h6>Shipping Address: {{$transaction['ship_addr']}}</h6></span>
                        <hr>
                        <table class="table">
                            <thead>
                                <th>Product</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                            </thead>
                            <tbody class="table-group-divider">
                                @foreach ($order_ids as $key=>$value)
                                    <tr>
                                        <td>Image here</td>
                                        <td>{{$value->prod_name}}</td>
                                        <td>{{$value->prod_price}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"> 
                                        <br>
                                        <form action="{{route('admin.shippingUpdate')}}" method="post">
                                            @csrf
                                            Delivery Status: 
                                            <select name="shipping" id="">
                                                <option value="packing"
                                                    @php
                                                        if($transaction['shipping'] == 'packing'){
                                                            echo 'selected';
                                                        }
                                                    @endphp
                                                >Packing Order</option>
                                                <option value="shipped"
                                                    @php
                                                        if($transaction['shipping'] == 'shipped'){
                                                            echo 'selected';
                                                        }
                                                    @endphp
                                                >Order Shipped</option>
                                                <option value="delivered"
                                                    @php
                                                        if($transaction['shipping'] == 'delivered'){
                                                            echo 'selected';
                                                        }
                                                    @endphp
                                                >Order Delivered</option>
                                            </select>
                                            <br>
                                            Service Provider: LalaMove
                                        
                                    </td>
                                    <td><span><h6>Total: P{{$transaction['total']}}</h6></span></td>
                                </tr>
                            </tfoot>
                        </table>
                                        <input type="hidden" name="id" value="{{$transaction['transac_id']}}">
                                        <button type="submit" class="btn btn-save">Save</button>
                                        <a href="{{route('admin.shipping')}}" class="button btn">Back</a>
                                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
