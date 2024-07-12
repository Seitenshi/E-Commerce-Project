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
                                        <td>
                                            @foreach ($pics as $pic)
                                                @if ($value->prod_id == $pic->prod_id)
                                                    <img src="{{ asset('assets/img2/' . $pic->file_name) }}" alt="{{$pic->file_name}}" style="width: 150px; height:150px">
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{$value->prod_name}}</td>
                                        <td>P{{number_format($value->prod_price,2)}}</td>
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
                                            @php
                                                if($transaction['shipping'] === 'packing'){
                                                    echo '<span style="color: Red">Packing Order</span>';
                                                }else if($transaction['shipping'] === 'shipped'){
                                                    echo '<span style="color: rgb(255, 166, 0)">Order Shipped</span>';
                                                }else if($transaction['shipping'] === 'delivered'){
                                                    echo '<span style="color: Green">Order Delivered</span>';
                                                }
                                            @endphp
                                            <br>
                                            Service Provider: LalaMove
                                        
                                    </td>
                                    <td><span><h6>Total: P{{number_format($transaction['total'],2)}}</h6></span></td>
                                </tr>
                            </tfoot>
                        </table>
                                        <input type="hidden" name="id" value="{{$transaction['transac_id']}}">
                                        <a href="{{route('profile')}}" class="button btn">Back</a>
                                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
