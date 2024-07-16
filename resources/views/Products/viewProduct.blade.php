<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/viewproduct.css">
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

<br><br><br> <!-- Non Functional Puro design lang :>>> -->
<div class="viewprod-container">
    <div class="product-image">
        <img src="{{asset('assets/img2/'.$product['file_name'])}}" alt="{{$product['prod_name']}}">
    </div>
    <div class="product-details">
        <form action="{{ route('product.show') }}" method="post" id="myForm1">
            @csrf
            <input type="hidden" name="prod_category" value="{{$product['prod_category']}}">
            <div class="breadcrumb">
                <a href="{{route('product.categories')}}">Shop</a>
                <a href="{{route('product.categories')}}">View Products</a>
                <a href="javascript:void(0);" onclick="document.getElementById('myForm1').submit();">{{$product['prod_category']}}</a>
                <span>{{$product['prod_name']}}</span> <!-- Current Page-->
            </div>
         </form>
        <h1>{{$product['prod_name']}}</h1>
        <p class="price">₱{{number_format($product['prod_price'],2)}}</p>
        <br>
        <div class="quantity">
            <label for="quantity">Quantity:</label>
            <input type="number" id="prod_quantity" name="prod_quantity" min="1" value="1">
        </div>
        <div class="actions">
            {{-- add to cart --}}
            <form action="{{ route('cart.add') }}" method="post">
                @csrf
                <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                <input type="hidden" name="quantity" id="buy-quantity" value="1" ><br><br>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            </form>

            {{-- buy now --}}
            <form action="{{ route('buynow.pay') }}" method="post">
                @csrf
                <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                <input type="hidden" name="quantity" id="buy-quantity" value="1">
                <button type="submit"class="checkout-now">Buy Now</button><br>
            </form>
        </div>
        <div class="description">
            <h2>Description:</h2>
            <p>{{$product['prod_desc']}}</p>
        </div>
    </div>
</div>

<script>
    document.getElementById('prod_quantity').addEventListener('input', function() {
        document.getElementById('buy-quantity').value = this.value;
    });
</script>


<br><br>



    <div class="container">
        <a href="{{ route('product.categories') }}" class="button btn">Back to Categories</a>
        <!-- Product Name --> 
        <div class="row">
            <div class="col-md-12">
                <span><h1>{{$product['prod_name']}}</h1></span>
            </div>
        </div>
        <hr>
        <br>
        <!-- Product Image & Buy Now / Add to Cart--> 
        <div class="row"><!-- gawin mo nalang inline dito para magpantay yung both div--> 
            <div class="col-md-6">
                {{-- <img src="{{asset('images/'.$product['prod_image'])}}" class="img-responsive"> --}}
                Image here
            </div>

            <div class="col-md-6">
                {{-- Buy Now --}}
                <form action="{{route('buynow')}}" method="post">
                    @csrf
                    <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                    <button type="submit">Buy Now</button>
                </form>

                {{-- Add to Cart --}}
                <form action="{{ route('cart.productdetail') }}" method="post">
                    @csrf
                    <input type="hidden" name="prod_id" value="{{$product['prod_id']}}">
                    <button type="submit">Add to Cart</button>
                </form>

            </div>
        </div>
        <hr>
        <!-- Product Description --> 
        <div class="row">
            <div class="col-md-12">
                <span><h3>Description</h3></span>
                <p>{{$product['prod_desc']}}</p>
            </div>
        </div>
    </div>
</div>

</body>