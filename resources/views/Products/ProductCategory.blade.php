<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/productcategory.css">
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
                                    <a class="nav-link mx-lg-2 active" aria-current="page" href="{{ route('product.categories') }}">Products</a>
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
            <form action="{{ route('product.show') }}" method="post">
                @csrf
                <input type="hidden" name="prod_category" value="Mats">
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </form>
        </div>
    </div>
    <div class="section baskets">
        <div class="overlay">
            <h2 class="text">BASKETS</h2>
            <form action="{{ route('product.show') }}" method="post">
                @csrf
                <input type="hidden" name="prod_category" value="Baskets">
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </form>
        </div>
    </div>
    <div class="section summer-furniture">
        <div class="overlay">
            <h2 class="text">SUMMER FURNITURE SALE</h2>
            <form action="{{ route('product.show') }}" method="post">
                @csrf
                <input type="hidden" name="prod_category" value="Others">
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </form>
        </div>
    </div>
    <div class="section filipino-indoor">
        <div class="overlay">
            <h2 class="text">FILIPINO INDOOR COMFORT</h2>
            <form action="{{ route('product.show') }}" method="post">
                @csrf
                <input type="hidden" name="prod_category" value="Indoor Comfort">
                <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
            </form>
        </div>
    </div>
</div>


    <br><br><br>

    <div class="custom-container2">
        <div class="section tables">
            <div class="overlay">
                <h2 class="text">TABLES</h2>
                <form action="{{ route('product.show') }}" method="post">
                    @csrf
                    <input type="hidden" name="prod_category" value="Tables">
                    <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
                </form>
            </div>
        </div>
        <div class="section surfaces">
            <div class="overlay">
                <h2 class="text">SURFACES</h2>
                <form action="{{ route('product.show') }}" method="post">
                    @csrf
                    <input type="hidden" name="prod_category" value="Surfaces">
                    <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
                </form>
            </div>
        </div>
        <div class="section racks">
            <div class="overlay">
                <h2 class="text">RACKS</h2>
                <form action="{{ route('product.show') }}" method="post">
                    @csrf
                    <input type="hidden" name="prod_category" value="Racks">
                    <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
                </form>
            </div>
        </div>
        <div class="section outdoor-furniture">
            <div class="overlay">
                <h2 class="text">FILIPINO OUTDOOR FURNITURE</h2>
                <form action="{{ route('product.show') }}" method="post">
                    @csrf
                    <input type="hidden" name="prod_category" value="Outdoor Furniture">
                    <button style="--clr:#EEA83B" class="view-now"><span>View Now</span><i></i></button>
                </form>
            </div>
        </div>
    </div>

<br><br>

<!-- FAQQEHHHHH -->
<div class="faq-section">
    <h2 class="faq-title">Frequently Asked Questions</h2>
    <div class="faq-columns">
        <div class="faq-column">
            <button class="accordion">Is it possible to modify or cancel an order after it has been placed?</button>
            <div class="panel">
                <p>Once your order has been processed, it cannot be changed or modified. However, if you need to cancel your order, 
                you can do so within 24 hours of placing it by completing the Order Cancellation Form. After canceling your order, you can place a new one.</p>
                <p>Please note that once your package has been shipped and you have received a tracking number, you will not be able to cancel your order. 
                It's important to review your order and ensure that all information is correct before completing the checkout process.</p>
            </div>

            <button class="accordion">How can I Order Kalinaw Products on the Website?</button>
            <div class="panel">
                <p style="font-weight: bold">You can easily order your desired products by following these simple steps:</p>
                <ol>
                    <li>Browse through our range of products.</li>
                    <li>Add your favorite items to your cart.</li>
                    <li>During checkout, update your contact information and delivery details.</li>
                    <li>Choose your preferred payment and shipping method.</li>
                    <li>If it's a non-cash-on-delivery (non-COD) order, make the payment online through G-Cash or Online Banking.</li>
                    <li>Receive a tracking number for your order.</li>
                    <li>Wait for your products to arrive.</li>
                </ol>
                <p style="font-weight: bold">We hope you enjoy your purchase!</p>
            </div>

            <button class="accordion">What is the estimated delivery time for my order?</button>
            <div class="panel">
                <p style="font-weight: bold">We aim to ship out all orders on the next business day to our courier partner. Once shipped, you can expect your Kalinaw products haul to be delivered within the following estimated timeframe:</p>
                <ul>
                    <li>Metro Manila: 1-3 days</li>
                    <li>Luzon: 2-4 days</li>
                    <li>Visayas: 5-7 days</li>
                    <li>Mindanao: 7-10 days</li>
                    <li>Islands (such as Palawan): 7-10 days, although it could take up to 1 month, especially for hard-to-reach locations.</li>
                </ul>
                <p style="font-weight: bold">Please note that actual delivery times may vary depending on various factors such as quarantine guidelines, weather conditions, and other unforeseen circumstances. We appreciate your understanding and patience!</p>
            </div>

            <button class="accordion">What Payment Methods Are Available?</button>
            <div class="panel">
                <p style="font-weight: bold">You have the option to choose from the following payment methods:</p>
                <ol>
                    <li>Cash on delivery (COD)</li>
                    <li>Online Bank Transfer (BPI and BDO)</li>
                    <li>E-Wallet (GCash)</li>
                </ol>
            </div>
        </div>

        <div class="faq-column">
            <button class="accordion">Is it possible to make special requests or customizations to my order?</button>
            <div class="panel">
                <p>We apologize for any inconvenience, but at this time, we are unable to accommodate special requests or customizations to orders due to the high volume of orders we receive.</p>
            </div>

            <button class="accordion">What if I receive incorrect, incomplete, or damaged items?</button>
            <div class="panel">
                <p>If you received incorrect, incomplete, or damaged items, please send an email to kalinaw_crafts@gmail.com or fill out the Product Concern Form within seven (7) days of receiving your package. 
                In your email, please provide your name, address, and contact number, order number, and photos of your waybill and the items you received. We will review the information and verify your concern. If necessary, we will replace your item.</p>
            </div>

            <button class="accordion">How do I get in touch with Kalinaw Crafts?</button>
            <div class="panel">
                <p style="font-weight: bold">Hello! If you have any inquiries regarding your order status, complaints about products, or similar issues, please reach out to us via email. If you have general concerns, need product advice, or have other questions, 
                you can contact us through our social media chat. You can talk to us on the following platforms:</p>
                <ul>
                    <li>Email: kalinaw_crafts@gmail.com</li>
                    <li>Facebook: Kalinaw Crafts PH</li>
                    <li>Instagram: @kalinaw.ph</li>
                    <li>TikTok: @kalinaw.ph</li>
                </ul>
            </div>

            <button class="accordion">Do you offer international shipping?</button>
            <div class="panel">
                <p>No, we don’t ship internationally. We only ship around the Philippines.</p>
            </div>
        </div>
    </div>
</div>

    <br><br>
    @include('footer')
</div>
<script src="/js/productcat.js"></script>
</body>
