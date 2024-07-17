<head>
    @include('Paks')
    <link rel="stylesheet" href="/css/profile.css">
</head>

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
                                            Service Provider: LalaMove <br>
                                            @php
                                                if($transaction['shipping'] === 'shipped'){
                                                    echo '<span style="font-weight:bold">Track your order here: </span><a href="{{ $trackingUrl }}">'.$trackingUrl.'</a>';
                                                }
                                            @endphp
                                            
                                        
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
