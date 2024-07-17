<head>
    @include('Paks')
    <link rel="stylesheet" href="/css/productcategory.css">
    <!-- Include DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif; /* Default font */
        }
        .container {
            padding: 20px;
        }
        .full-width-background {
            width: 100%;
            height: 50vh; 
            background-image: url('assets/img/hmpgev1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .full-width-background1 {
            width: 86vh;
            height: 50vh; 
            background-image: url('assets/img/wood.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: inline-block;
            justify-content: center;
            align-items: center;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .content h1 {
            margin: 0;
            font-size: 2.5em;
            color: #333;
        }
        .content p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    

<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
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
                                    <a class="nav-link mx-lg-2" href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2 active" aria-current="page" href="{{ route('logged.about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="{{ route('product.categories') }}">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-lg-2" href="{{ route('profile') }}"><img width="26" height="26" src="https://img.icons8.com/laces/64/gender-neutral-user.png" alt="gender-neutral-user"/></a>
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
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 full-width-background">
                
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12 content">
                <center><h1>Welcome to Kalinaw Crafts!</h1></center>
                <p>At Kalinaw Crafts, we believe in the power of creativity and community. Our journey began with a simple idea: to bring the beauty and craftsmanship of Filipino artisans to the world. Inspired by the rich cultural heritage and vibrant traditions of the Philippines, we set out to create a platform where local talents could shine and where customers could find unique, high-quality handcrafted products.</p>

            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-6 content" style="display: inline-block;">
                <center><h2>Our Mission</h2></center>
                <p>Our mission is to support and empower local artisans by providing them with a platform to showcase their talents and reach a global audience. We are committed to promoting fair trade practices, ensuring that our artisans receive fair compensation for their work, and helping to preserve traditional crafts for future generations.</p>
            </div>

            <div class="col-md-6 content" style="display: inline-block">
                <center><h2>What We Offer</h2></center>
                <p>At Kalinaw Crafts, you'll find a wide range of handcrafted products, each with its own story and soul. From intricately woven textiles and hand-carved wooden items to beautifully crafted home decor, our collections are curated to bring the warmth and beauty of Filipino craftsmanship into your home. Every piece is made with love and dedication, reflecting our artisans' rich cultural heritage and artistic skills.</p>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-12 content" style="background-color: #9c6830; padding: 20px">
                <center>
                    <h1 style="color: white">Where is our store located?</h1>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Lot%204,%20Block%208,%20E.%20Ragas%20Street,%20Pateros,%20Metro%20Manila&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-6 content" style="display: inline-block;">
                <center><h2>Our Values</h2></center>
                <ul style="text-align: left">
                    <li><span style="font-weight: bold">Quality and Craftsmanship:</span>  We take pride in offering products that are beautiful and made to last. Each item in our collection is crafted with meticulous attention to detail and a commitment to quality.</li>
                    <li><span style="font-weight: bold">Community and Fair Trade:</span> We support our artisans by promoting fair trade practices. We ensure that they receive fair compensation for their work and that their traditional crafts are celebrated and preserved.</li>
                    <li><span style="font-weight: bold">Sustainability:</span> We are committed to promoting sustainable practices in everything we do. From sourcing materials to packaging, we strive to minimize our environmental impact and support a more sustainable future.</li>
                </ul>
            </div>

            <div class="col-md-6 full-width-background1" style="display: inline-block;">
                <!-- Background image -->
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-12 content" style="color:white;background-color: #9c6830; padding: 20px">
                <center><h2>Join Us on Our Journey</h2></center>
                <p style="color: white">We invite you to join us on our journey to celebrate and support Filipino craftsmanship. By choosing Kalinaw Crafts, you are not only bringing beautiful, handcrafted products into your life but also helping to empower local artisans and preserve their traditions. Thank you for being a part of our community and for supporting our mission.</p>

                <center><h4>With gratitude,
                    The Kalinaw Crafts Team
                    </h4></center>

            </div>
        </div>
    </div>
</div>

@include('footer')
</body>
