<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul class="header__top__widget">
                        <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
                        <li><i class="fa fa-envelope-o"></i> Info.colorlib@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="header__top__right">
                        <div class="header__top__phone">
                            <i class="fa fa-phone"></i>
                            <span>(+12) 345 678 910</span>
                        </div>
                        <div class="header__top__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('theme/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="{{route('searchcar')}}">Cars</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('aboutus')}}">About</a></li>
                            <li><a href="{{route('contactus')}}">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header__nav__widget">
                        <div class="header__nav__widget__btn">
                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                        </div>
                        <a href="#" class="primary-btn">Add Car</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <span class="fa fa-bars"></span>
        </div>
    </div>
</header>