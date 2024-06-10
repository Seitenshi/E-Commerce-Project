<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/homepage.css">
    </head>
<div>

    <!-- Sticky Nav Bar -->
    <div>
        <nav class="navbar navbar-expand-lg fixed top">
            <div class="container-fluid">
                <a class="navbar-brand ms-auto" href="#">Logo</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LOGO</h5>
                        <button type="button" class="btn-close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <button class="btn nav-link mx-lg-2"><i class="fa-solid fa-cart-shopping"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="loginbutton">Login</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>
</div>

<div>
    <div class="pic1">

    </div>

    <br>
    
    <!-- Big ass search bar -->
    <div class="container">
        <div class="row align-items-center justify-content-center" >
            <center>
                <form action="">
                    <input type="text" placeholder="Search.." name="search" style="width:500px">
                    <button type="submit">Search</button>
                </form>
            </center>
        </div>
    </div>

    <br>
    <br>

    <!-- Product highlights -->
    <div class="container" style="padding: 2px">
        <div class="row align-items-center justify-content-center" >
            <div class="col-md-6">
                Wood work pics
            </div>

            <div class="col-md-6">
                <div class="row align-items-center justify-content-center" >
                    Description
                </div>
                <br>
                <div class="row align-items-center justify-content-center" >
                    <button>View products</button>
                </div>
            </div>
        </div>
    </div>

</div>


