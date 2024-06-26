<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/homepage.css">
    </head>
<body>

    <!-- Sticky Nav Bar -->
    <div class="topbar">
        <nav class="navbar navbar-expand-lg fixed">
            <div class="container-fluid">
                <a class="navbar-brand ms-auto" href="#"><img src="/assets/img/klogo.png" height="50" width="50"></a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
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


 <!-- Scroll break -->

 <div class="kalinaw-container">
    <div class="kalinaw">
        <div class="kalinawL">KALINAW</div> 
        <div class="kalinawR">CRAFTS</div>
    </div>
</div>
</div>

<div class="parlx1 w3-animate-left"> 
    <div class="wrap">
        <div class="search">
                <input type="text" class="searchTerm" name="search" placeholder="What are you looking for?">
                <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
             </div>
          </div>
</div>           


    <br><br><br>

    <!-- Product highlights -->

    <div class="carousel">
  <div class="carousel__nav">
    <span id="moveLeft" class="carousel__arrow">
      <svg class="carousel__icon" width="24" height="24" viewBox="0 0 24 24">
        <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
      </svg>
    </span>
    <span id="moveRight" class="carousel__arrow">
      <svg class="carousel__icon" width="24" height="24" viewBox="0 0 24 24">
        <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
      </svg>
    </span>
  </div>

  <div class="carousel-items">
    <div class="carousel-item carousel-item--1 active"></div>
    <div class="carousel-item carousel-item--2"></div>
    <div class="carousel-item carousel-item--3"></div>
    <div class="carousel-item carousel-item--4"></div>
    <div class="carousel-item carousel-item--5"></div>
  </div>

  <div class="carousel-item__info">
    <div class="carousel-item__container">
      <h1 class="carousel-item__title">Le tour Chair</h1>
      <p class="carousel-item__description">This chair is made of oak wood with bits of fabrics on the top and bottom. You can also swing with it and you will not fall because of its firmness.</p>
      <a href="#" class="carousel-item__btn">Check more chairs</a>
    </div>
  </div>
</div>




<!-- 
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
    </div> -->
    <br><br><br>

</div>
<script src="/js/homepage.js"></script>
</body>

