<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Store | Ecommerce Website Design</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @stack('style')
</head>

<body>

    <div class="header">
        <div class="container">

            <div class="navbar">
                <div class="logo">
                    <a href="{{ route('red_store.home') }}"> <img src="{{ asset('images/logo.png') }}" alt="" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="{{ route('red_store.home') }}">Home</a></li>
                        <li><a href="{{ route('red_store.products') }}">Products</a></li>
                        <li><a href="{{ route('red_store.about') }}">About</a></li>
                        <li><a href="{{ route('red_store.contact') }}">Contact</a></li>
                        <li><a href="{{ route('red_store.accounts') }}">Account</a></li>
                    </ul>
                </nav>
                <a href="{{ route('red_store.cart') }}"><img src="{{ asset('images/cart.png') }}" alt="" width="30px" height="30px"></a>
                <img src="{{ asset('images/menu.png') }}" alt="" class="menu-icon" onclick="menuToggle()">
            </div>
            @yield('hero-section')

        </div>
    </div>

    @yield('content')

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus enim placeat nobis corrupti eius, nam voluptatum aliquam vero labore nostrum quo voluptates aspernatur earum velit consectetur quibusdam sequi dolorum ea?</p>
                    <div class="app-logo">
                        <img src="{{ asset('images/play-store.png') }}" alt="">
                        <img src="{{ asset('images/app-store.png') }}" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="{{ asset('images/logo-white.png') }}" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus enim placeat nobis corrupti eius, nam voluptatum aliquam</p>
                </div>
                <div class="footer-col-3">
                    <h3>Usefull Links</h3>
                    <ul>
                        <li>Coupens</li>
                        <li>Blog post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">
                Copyright 2025
            </p>
        </div>
    </div>

    <!-- js for toggle menu -->
    <script>
        console.log('tttttttttttt')
        let menuItem = document.getElementById("MenuItems");
        menuItem.style.maxHeight = "0px";

        function menuToggle() {
            if (menuItem.style.maxHeight == "0px") {

                menuItem.style.maxHeight = "200px";

            } else {
                menuItem.style.maxHeight = "0px";
            }
        }
    </script>
    @stack('scripts')
</body>

</html>