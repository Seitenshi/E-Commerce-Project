<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/homepage_logged.css">
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

<br><br>

 <!-- Scroll break -->

 <div class="kalinaw-container">
    <div class="kalinaw">
        <div class="kalinawL">KALINAW</div> 
        <div class="kalinawR">CRAFTS</div>
    </div>
</div>
</div>

{{-- <div class="parlx1 w3-animate-left"> 
    <div class="wrap">
        <div class="search">
                <input type="text" class="searchTerm" name="search" placeholder="What are you looking for?">
                <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
             </div>
          </div>
</div>            --}}


<div class="Midbar">
    <video autoplay loop muted plays-inline class="vidback">
      <source src="assets/vid/loopvid.mp4" type="video/mp4">
    </video>
    <h1>Welcome to Kalinaw Crafts, {{ $user->user_fname }}</h1>
    <p>Embrace the beauty of Filipino craftsmanship. Discover our unique collection of furniture and home essentials inspired by Filipino heritage.</p>
    <div class="search-bar">
        <input type="text" class="searchTerm" name="search" placeholder="What are you looking for?">
        <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
    </div>
    <div class="hypel">
      <form action="{{ route('product.show') }}" method="post" id="myForm1" style="display: inline;">
          @csrf
          <input type="hidden" name="prod_category" value="Indoor Comfort">
          <a href="javascript:void(0);" onclick="document.getElementById('myForm1').submit();">Filipino Indoor Comfort</a>
      </form>
      <form action="{{ route('product.show') }}" method="post" id="myForm2" style="display: inline;">
          @csrf
          <input type="hidden" name="prod_category" value="Others">
          <a href="javascript:void(0);" onclick="document.getElementById('myForm2').submit();">Summer Furniture Sale</a>
      </form>
      <form action="{{ route('product.show') }}" method="post" id="myForm3" style="display: inline;">
          @csrf
          <input type="hidden" name="prod_category" value="Baskets">
          <a href="javascript:void(0);" onclick="document.getElementById('myForm3').submit();">Filipino Baskets</a>
      </form>
    </div>
    <div>
        <button type="button" id="shpbut" class="btn btn-primary btn-lg" onclick="console.log('Button clicked'); window.location.href='{{ route('product.categories') }}'">Shop Now</button>
    </div>
</div>
<br>

 <!-- Product highlights -->

<div class="ProdShows">
    <div class="ProdShow">
        <div class="image-container">
            <img src="/assets/img/sofa.jpg" alt="Handcrafted Sofa">
        </div>
        <div class="overlay">
            <h3>Handcrafted Sofa</h3>
            <a href="{{route('product.categories')}}">shop now</a>
        </div>
    </div>
    <div class="ProdShow">
        <div class="image-container">
            <img src="/assets/img/rcks.jpg" alt="Filipino Racks">
        </div>
        <div class="overlay">
            <h3>Filipino Racks</h3>
            <a href="{{route('product.categories')}}">shop now</a>
        </div>
    </div>
    <div class="ProdShow">
        <div class="image-container">
            <img src="/assets/img/cffetble.jpg" alt="Elegant Coffee Tables">
        </div>
        <div class="overlay">
            <h3>Elegant Coffee Tables</h3>
            <a href="{{route('product.categories')}}">shop now</a>
        </div>
    </div>
</div>
    <br><br><br>

    <!-- Product highlights -->

    {{-- <div class="carousel">
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
</div> --}}

  <!--Section 3 to the last -->
 <div class="container">
    <div class="subscription-form">
      <h2>Sign up for new stories and personal offers.</h2>
      <p>Subscribe to get notified about new stories, news and personal offers.</p>
      <form>
        <div class="input-group">
          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
          <input type="email" class="form-control" placeholder="Your email" aria-label="Your email">
          <button class="btn btn-outline-secondary" type="submit">→</button>
        </div>
      </form>
    </div>
  </div>
    <br><br><br>

    <div class="inspiration-section">
        <div class="inspiration-image">
          <img src="/assets/img/chrinspi.jpg" alt="Inspiration Image">
        </div>
        <div class="inspiration-text">
          <p class="inspiration-tag">INSPIRATION</p>
          <h2>We are inspired by the realities of life today.</h2>
          <a href="{{route('product.categories')}}" class="shop-button">Shop now</a>
        </div>
      </div>
<br><br><br>

  <!-- Last section -->

  <div class="container">
    <h1 class="font-weight-bold h3 mb-5">GALLERY OF PRODUCTS</h1>
    <section class="product-show slider">
      <div class="slide"><img src="/assets/img/chr2.jpg" alt="Products Pic"></div>
      <div class="slide"><img src="/assets/img/tble2.jpg" alt="Products Pic"></div>
      <div class="slide"><img src="/assets/img/tble3.jpg" alt="Products Pic"></div>
      <div class="slide"><img src="/assets/img/tble4.jpg" alt="Products Pic"></div>
      <div class="slide"><img src="/assets/img/sofa.jpg" alt="Products Pic"></div>
      <div class="slide"><img src="/assets/img/lamp.jpg" alt="Products Pic"></div>
      {{-- <div class="slide"><img src="/assets/img/tble.png" alt="Products Pic"></div> --}}
    </section>
  </div>
 <br><br><br>
 @include('footer')

</div>
<script src="/js/homepage.js"></script>
