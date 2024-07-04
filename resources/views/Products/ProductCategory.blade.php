<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/productcategory.css">
    </head>

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
                                <a class="nav-link mx-lg-2 active" href="{{ route('product.categories') }}">View Product Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="{{ route('profile') }}">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('cart') }}" class="button btn nav-link mx-lg-2"><i class="fa-solid fa-cart-shopping"></i></a>
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

    <br><br>

<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <div class="container-fluid">
        <!-- Category 1 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Baskets</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Baskets">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 2 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Indoor Comfort</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Indoor Comfort">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 3 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Mats</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Mats">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 4 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Outdoor Furniture</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Outdoor Furniture">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 5 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Racks</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Racks">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 6 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Surfaces</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Surfaces">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 7 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Tables</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Tables">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

        <!-- Category 8 -->
        <div class="row">
            <div class="col-md-12">
                <div>
                    <center><h1>Others</h1></center>
                    <br><hr><br>
                    <center>Description</center>
                    <br><br>
                    <form action="{{ route('product.show') }}" method="post">
                        @csrf
                        <input type="hidden" name="prod_category" value="Others">
                        <center><button type="submit">View Products</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

    </div>

</div>
