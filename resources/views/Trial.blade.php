<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/trial.css">
    </head>
<body>
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

 <!-- Scroll break -->

<div>
    <div>
        <div class="kalinaw">
         <div class="kalinawL">KALINAW</div> 
         <div class="kalinawR">CRAFTS</div>
         </div>
    </div>
    <br><br><br><br><br><br>

    <main>
        <div class="container">
          <h1>Fancy Search Box</h1>
          <h2>Try below!</h2>
          <div class="search-box">
            <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
            <form action="" class="search-form">
              <input type="text" placeholder="Search" id="search" autocomplete="off">
            </form>
            <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;"
             xml:space="preserve">
                <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280"/>
                <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280"/>
              </svg>
            <div class="go-icon"><i class="fa fa-arrow-right"></i></div>
          </div>
      
        </div>
      </main>

    
    <!-- Big ass search bar -->
    <div class="pic1">
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
<script src="/js/trial.js"></script>
</body>

