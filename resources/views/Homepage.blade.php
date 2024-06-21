<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/homepage.css">
    </head>
<body>
<div>
    <!-- Sticky Nav Bar -->
    <div>
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

  <div class="container">
    <div class="left-column">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
          <div class="swiper-slide"></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
      </div>
    </div>
    <div class="right-column">
      <h2>Right Column Content</h2>
      <p>This is the content for the right column.</p>
      <!-- Add more content here as needed -->
    </div>
  </div>


    {{-- <div class="col col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Crime Reports</h5>
            <select id="timeInterval" class="colorchrt">
                <option value="weekly" class="colorchrt">Weekly</option>
                <option value="monthly" class="colorchrt">Monthly</option>
                <option value="yearly" class="colorchrt">Yearly</option>

            <div style="width: 100%; height: 500px;">
                <canvas id="crimeReportsChart"></canvas>
            </div>

            </div>
        </div>
    </div>
    
    <div class="col col-md-6"> 
      <div class = "card">
        <div class = "card-body">
        <h5 class="card-title" id="secondtitle">Crime cases count</h5>
                    <div style="width: 100%; height: 300px;">
                        <canvas id="topCrimeChart"></canvas>
                    </div>
                
                </div>
            </div>
        </div>  --}}




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
    <br><br><br>

</div>
<script src="/js/homepage.js"></script>
</body>

