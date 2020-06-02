<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HVAC | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <a href="#"><i class="fa fa-cart-plus"></i></a>
            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
            <a href="#" class="primary-btn">Add Car</a>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="{{asset('theme/img/logo.png')}}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
            <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+12) 345 678 910</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
   @include('theme.includes.header')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
   @yield('content')
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    {{-- @include('theme.includes.services') --}}
    <!-- Services Section End -->

    <!-- Feature Section Begin -->
   {{-- @include('theme.includes.feature') --}}
    <!-- Feature Section End -->

    <!-- Car Section Begin -->
    {{-- @include('theme.includes.carsection') --}}
    <!-- Car Section End -->

    <!-- Chooseus Section Begin -->
    {{-- @include('theme.includes.chooseuse') --}}
    <!-- Chooseus Section End -->

    <!-- Latest Blog Section Begin -->
    {{-- @include('theme.includes.blogsection') --}}
    <!-- Latest Blog Section End -->

    <!-- Cta Begin -->
   {{-- @include('theme.includes.ctasection') --}}
    <!-- Cta End -->

    <!-- Footer Section Begin -->
   @include('theme.includes.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{asset('theme/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('theme/js/mixitup.min.js')}}"></script>
    <script src="{{asset('theme/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>
</body>

</html>