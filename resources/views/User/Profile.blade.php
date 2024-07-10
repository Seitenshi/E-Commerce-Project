<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/profile.css">
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

</div>

<br><br>
    
<div class="container">
    <form action="{{ route('update.profile') }}" method="post">
        @csrf
    <div class="header">PROFILE INFORMATION</div>
    <div class="profile-info">
        <img src="/assets/img/defprof.png" alt="Profile Picture">
        <table>
            <tr>
                <th>First Name:</th>
                <td>{{$user['user_fname']}}</td>
                <th>Last Name:</th>
                <td>{{$user['user_lname']}}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{$user['user_email']}}</td>
                <th>Contact No:</th>
                <td>{{$user['user_contact']}}</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>{{$user['user_addr']}}</td>
                <th>Country:</th>
                <td>India</td>
            </tr>
        </table>
        </form>
    </div>
    <div class="summary">
        <div>
            <h3>PURCHASE SUMMARY</h3>
            <p>Total Purchase: ₹4,950.00</p>
            <p>Last 7 Days: ₹0.00</p>
            <p>Last 30 Days: ₹4,950.00</p>
        </div>
        <div>
            <h3>OTHERS INFO</h3>
            <p>Wished Products: 0</p>
            <p>User Since: 16 Feb, 2019</p>
            <p>Last Login: 05 Mar, 2019</p>
        </div>
        <div>
            <h3>PACKAGE INFO</h3>
            <p>Remaining Upload Amount: 2</p>
            <p>Current Package: Default</p>
            <p>Payment Type: None</p>
        </div>
    </div>
    <div class="update-password">
        <button id="updatePasswordBtn">Update Password</button>
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('update.profile') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">First Name: </label>
                        {{$user['user_fname']}}
                        <br>
                        <label for="name">Last Name: </label>
                        {{$user['user_lname']}}
                        <br>
                        <label for="name">Email: </label>
                        {{$user['user_email']}}
                        <br>
                        <label for="name">Contact Number: </label>
                        <input type="text" name="user_contact" id="user_contact" value="{{$user['user_contact']}}" required>
                        <br>
                        <label for="name">Address: </label>
                        <input type="text" name="user_addr" id="user_addr" value="{{$user['user_addr']}}" required>
                        <br>
                        <label for="name">Password: </label>
                        <input type="password" name="user_password" id="user_password" required>
                        <br>
                        <label for="name">Confirm Password: </label>
                        <input type="password" name="confirm_user_password" id="confirm_user_password" required>
                        <br>
                        <input type="hidden" name="user_id" value="{{$user['user_id']}}">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('home') }}" class="button btn">Back to home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>    --}}
</div>

<!-- The Modal -->
<div id="updatePasswordModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Update Password</h2><br>
        <center>
            <form>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="currentPassword" placeholder=" ">
                <label for="currentPassword">Current Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="user_password" placeholder=" ">
                <label for="user_password">New Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="confirm_user_password" placeholder=" ">
                <label for="confirm_user_password">Confirm New Password</label>
            </div>
            <input type="hidden" name="user_id" value="{{$user['user_id']}}">
            <button type="submit" class="submit">Update Password</button>
            </form>
        </center>
    </div>
</div>









<script src="/js/profilepage.js"></script>
</body>