@extends('theme.layout')

@section('content')

<!-- Breadcrumb End -->
<div class="breadcrumb-option set-bg" data-setbg="{{asset('theme/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Latest Blogs</h2>
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Our Blogs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Begin -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{asset('theme/img/blog/blog-1.jpg')}}">
                                <ul>
                                    <li>By Polly Williams</li>
                                    <li>Dec 11, 2018</li>
                                    <li>8 Comment</li>
                                </ul>
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="{{route('testpostblog')}}">Benjamin Franklin S Method Of</a></h5>
                                <p>Great business ideas when utilized effectively can save lots of money. This is
                                    not only easy for those who work full-time as an advertiser...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{asset('theme/img/blog/blog-2.jpg')}}">
                                <ul>
                                    <li>By Evelyn Lane</li>
                                    <li>Dec 17, 2018</li>
                                    <li>Comment</li>
                                </ul>
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">Where To Look For Cheap Brochure</a></h5>
                                <p>Usually potential customers will visit home for business dealing. Print good
                                    amount of fliers and give it to anyone who is visiting home like family...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{asset('theme/img/blog/blog-3.jpg')}}">
                                <ul>
                                    <li>By Jessie Palmer</li>
                                    <li>Dec 19, 2018</li>
                                    <li>Comment</li>
                                </ul>
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">Promotional Advertising Specialty</a></h5>
                                <p>For those who work outside home, employ college students to distribute fliers at
                                    supermarkets, community centers...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{asset('theme/img/blog/blog-4.jpg')}}">
                                <ul>
                                    <li>By Don Townsend</li>
                                    <li>Dec 22, 2018</li>
                                    <li>Comment</li>
                                </ul>
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">Using Banner Stands To Increase</a></h5>
                                <p>Spread the word by the mouth. Talk to everyone about the product and ask them to
                                    talk about it to others...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{asset('theme/img/blog/blog-5.jpg')}}">
                                <ul>
                                    <li>By Isabella Mann</li>
                                    <li>Dec 25, 2018</li>
                                    <li>2 Comment</li>
                                </ul>
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">3 Smart Reasons Why You Should </a></h5>
                                <p>It’s a very powerful tool to increase the network and doesn’t even cost anything.
                                    When receiving a casual call from family members and friends...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="{{asset('theme/img/blog/blog-6.jpg')}}">
                                <ul>
                                    <li>By Polly Williams</li>
                                    <li>Dec 27, 2018</li>
                                    <li>6 Comment</li>
                                </ul>
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">Search Engine Optimization And</a></h5>
                                <p>Some businesses place a jar at the reception counter where the business cards can
                                    be dropped for future reference, while visiting them...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination__option">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><span class="arrow_carrot-2right"></span></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-9">
                <div class="blog__sidebar">
                    <form action="#" class="blog__sidebar__search">
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <div class="blog__sidebar__feature">
                        <h4>Feature News</h4>
                        <div class="blog__sidebar__feature__item">
                            <h6><a href="#">Where To Look For Cheap Brochure</a></h6>
                            <ul>
                                <li>By Polly Williams</li>
                                <li>Dec 27, 2018</li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__feature__item">
                            <h6><a href="#">Using Banner Stands To Increase</a></h6>
                            <ul>
                                <li>By Evelyn Lane</li>
                                <li>Dec 17, 2018</li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__feature__item">
                            <h6><a href="#">Promotional Advertising Specialty</a></h6>
                            <ul>
                                <li>By Don Townsend</li>
                                <li>Dec 22, 2018</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__sidebar__categories">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">Creativity</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Inspiration</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="blog__sidebar__tag">
                        <h4>Tag</h4>
                        <a href="#">Car Dealer</a>
                        <a href="#">bmw</a>
                        <a href="#">Chevrolet</a>
                        <a href="#">ferrari</a>
                        <a href="#">Honda</a>
                        <a href="#">Hatchback</a>
                    </div>
                    <div class="blog__sidebar__newslatter">
                        <h4>Newsletter</h4>
                        <p>Subscribe our newsletter gor get</p>
                        <form action="#">
                            <input type="text" placeholder="Your email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->


@endsection