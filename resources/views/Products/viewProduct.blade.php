<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/viewproduct.css">
    </head>
<body>
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
                            <a class="nav-link mx-lg-2 active" href="{{ route('product.categories') }}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="{{ route('profile') }}"><img width="26" height="26" src="https://img.icons8.com/laces/64/gender-neutral-user.png" alt="gender-neutral-user"/></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cart') }}" class="button btn nav-link mx-lg-2"><img width="26" height="26" src="https://img.icons8.com/ios/50/shopping-bag--v1.png" alt="shopping-bag--v1"/></a>
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

<br><br><br> <!-- Non Functional Puro design lang :>>> -->
<div class="viewprod-container">
    <div class="product-image">
        <img src="/assets/img/chrinspi.jpg" alt="Filipino Classic Woven Chair">
    </div>
    <div class="product-details">
        <div class="breadcrumb">
            <a href="#">Shop</a>
            <a href="#">View Products</a>
            <a href="#">Summer Furniture Sale</a> <!-- Gawing dynamic from the products page-->
            <span>Filipino Classic Woven Chair</span> <!-- Current Page-->
        </div>
        <h1>Filipino Classic Woven Chair</h1>
        <p class="price">₱1,250</p>
        <p class="size">Size: 50 x 20 x 40</p>
        <div class="quantity">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1">
        </div>
        <div class="actions">
            <button class="add-to-cart">Add to Cart</button>
            <button class="checkout-now">Buy Now</button>
        </div>
        <div class="description">
            <h2>Description:</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
        </div>
    </div>
</div>




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