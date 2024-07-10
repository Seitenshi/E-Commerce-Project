<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/productcategory.css">
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
                                <a class="nav-link mx-lg-2" href="{{ route('product.categories') }}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2 active" href="{{ route('profile') }}"><img width="26" height="26" src="https://img.icons8.com/laces/64/gender-neutral-user.png" alt="gender-neutral-user"/></a>
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

    <br><br>

    <div class="text-scroll">
        <div><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span>
            <span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span>
            <span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span>
            <span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span>
            <span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span>
            <span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span><span>Shop Now -- </span>
        </div>
</div>

    <br><br>

<!-- Product grids -->
    <div class="custom-container">
        <div class="section woven-mats">
            <div class="overlay">
                <h2 class="text">WOVEN MATS</h2>
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </div>
        </div>
        <div class="section baskets">
            <div class="overlay">
                <h2 class="text">BASKETS</h2>
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </div>
        </div>
        <div class="section summer-furniture">
            <div class="overlay">
                <h2 class="text">SUMMER FURNITURE SALE</h2>
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </div>
        </div>
        <div class="section filipino-indoor">
            <div class="overlay">
                <h2 class="text">FILIPINO INDOOR COMFORT</h2>
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </div>
        </div>
    </div>

    <br><br><br>

    <div class="custom-container2">
        <div class="section tables">
            <div class="overlay">
                <h2 class="text">TABLES</h2>
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </div>
        </div>
        <div class="section surfaces">
            <div class="overlay">
                <h2 class="text">SURFACES</h2>
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </div>
        </div>
        <div class="section racks">
            <div class="overlay">
                <h2 class="text">RACKS</h2>
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </div>
        </div>
        <div class="section outdoor-furniture">
            <div class="overlay">
                <h2 class="text">FILIPINO OUTDOOR FURNITURE</h2>
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </div>
        </div>
    </div>

<br><br>

<!-- FAQQEHHHHH -->
<div class="faq-section">
    <div class="faq-title">Frequently Asked Questions</div>

    <div class="faq-columns">
        <div class="faq-column">
            <button class="accordion">How do you choose what materials to use?</button>
            <div class="panel">
                <p>We carefully select materials based on their quality, durability, and environmental impact. We prioritize sustainable and eco-friendly materials wherever possible.</p>
            </div>

            <button class="accordion">Where are your products made?</button>
            <div class="panel">
                <p>Our products are made in various locations, including both local and international factories that meet our high standards for quality and ethical practices.</p>
            </div>
        </div>

        <div class="faq-column">
            <button class="accordion">What are you doing to be more sustainable?</button>
            <div class="panel">
                <p>We are constantly working on reducing our environmental footprint by using sustainable materials, minimizing waste, and implementing eco-friendly practices throughout our supply chain.</p>
            </div>
        </div>
    </div>
</div>

    <br><br><br>


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
                        <center><button type="submit">View Productss</button></center>
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
                        <center><button type="submit">View Productss</button></center>
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
                        <center><button type="submit">View Productss</button></center>
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
                        <center><button type="submit">View Productss</button></center>
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
                        <center><button type="submit">View Productss</button></center>
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
                        <center><button type="submit">View Productss</button></center>
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
                        <center><button type="submit">View Productss</button></center>
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
                        <center><button type="submit">View Productss</button></center>
                    </form>
                </div>
            </div>
        </div>
        <br>

    </div>

</div>
<script src="/js/productcat.js"></script>
</body>
