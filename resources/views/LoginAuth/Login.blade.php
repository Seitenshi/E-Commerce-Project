<!DOCTYPE html>
<html lang="en">
    <head>
        @include('Paks')
        <link rel="stylesheet" href="/css/login.css">
    </head>
<body>   
<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="{{ url('/adduser') }}" method="post">
                @csrf
                <!-- Register -->
                <h1>Create Account</h1>
                <input type="text" class="form-control" placeholder="First Name" aria-label="First Name" name="user_fname" required>
                <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name" name="user_lname" required>
                <input type="text" class="form-control" placeholder="Contact Number" aria-label="Contact Number" name="user_contact" required>
                <input type="text" class="form-control" placeholder="Address" aria-label="Address" name="user_addr" required>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="user_email" required>
                <input type="text" class="form-control" placeholder="Password" aria-label="Password" name="user_password" required>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="{{ url('/auth') }}" method="post">
                @csrf
                <!-- Login -->
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="user_email" required>
                <input type="text" class="form-control" placeholder="Password" aria-label="Password" name="user_password" required>
                <a href=" ">Forgot Your Password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Do you have an account already? Sign In here</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Don't have an account? Register now to use all of site features</p>
                    <button class="hidden" id="register">Register</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/login.js"></script>
</body>
