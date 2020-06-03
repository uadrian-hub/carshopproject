@extends('theme.layout')

@section('content')

  <!-- Breadcrumb Start -->
  <div class="breadcrumb-option set-bg" data-setbg="{{asset('theme/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Porsche Cayenne Turbo S 2019</h2>
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="{{route('searchcar')}}">Car Listing</a>
                        <span>Porsche cayenne turbo s</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Car Details Section Begin -->
<section class="car-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="car__details__pic">
                    <div class="car__details__pic__large">
                        <img class="car-big-img" src="{{asset('theme/img/cars/details/cd-1.jpg')}}" alt="">
                    </div>
                    <div class="car-thumbs">
                        <div class="car-thumbs-track car__thumb__slider owl-carousel">
                            <div class="ct" data-imgbigurl="{{asset('theme/img/cars/details/cd-2.jpg')}}"><img
                                    src="{{asset('theme/img/cars/details/sm-1.jpg')}}" alt=""></div>
                            <div class="ct" data-imgbigurl="{{asset('theme/img/cars/details/cd-3.jpg')}}"><img
                                    src="{{asset('theme/img/cars/details/sm-2.jpg')}}" alt=""></div>
                            <div class="ct" data-imgbigurl="{{asset('theme/img/cars/details/cd-4.jpg')}}"><img
                                    src="{{asset('theme/img/cars/details/sm-3.jpg')}}" alt=""></div>
                            <div class="ct" data-imgbigurl="{{asset('theme/img/cars/details/cd-5.jpg')}}"><img
                                    src="{{asset('theme/img/cars/details/sm-4.jpg')}}" alt=""></div>
                            <div class="ct" data-imgbigurl="{{asset('theme/img/cars/details/cd-6.jpg')}}"><img
                                    src="{{asset('theme/img/cars/details/sm-5.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="car__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Vehicle
                                Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Technical</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Features & Options</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Vehicle Location</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>General Information</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                    consectetur nec</li>
                                                <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                    lectus vitae.</li>
                                                <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                    sit amet felis ido.</li>
                                                <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                    Vestibulum ligula.</li>
                                                <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                    eget aliquet et.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>General Information</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                    consectetur nec</li>
                                                <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                    lectus vitae.</li>
                                                <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                    sit amet felis ido.</li>
                                                <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                    Vestibulum ligula.</li>
                                                <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                    eget aliquet et.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="car__details__tab__feature">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Interior Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                <li><i class="fa fa-check-circle"></i> CD player</li>
                                                <li><i class="fa fa-check-circle"></i> Central locking</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Safety Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Extra Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Extra Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>General Information2</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                    consectetur nec</li>
                                                <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                    lectus vitae.</li>
                                                <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                    sit amet felis ido.</li>
                                                <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                    Vestibulum ligula.</li>
                                                <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                    eget aliquet et.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>General Information</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                    consectetur nec</li>
                                                <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                    lectus vitae.</li>
                                                <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                    sit amet felis ido.</li>
                                                <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                    Vestibulum ligula.</li>
                                                <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                    eget aliquet et.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="car__details__tab__feature">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Interior Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                <li><i class="fa fa-check-circle"></i> CD player</li>
                                                <li><i class="fa fa-check-circle"></i> Central locking</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Safety Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Extra Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Extra Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>General Information3</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                    consectetur nec</li>
                                                <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                    lectus vitae.</li>
                                                <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                    sit amet felis ido.</li>
                                                <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                    Vestibulum ligula.</li>
                                                <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                    eget aliquet et.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>General Information</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                    consectetur nec</li>
                                                <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                    lectus vitae.</li>
                                                <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                    sit amet felis ido.</li>
                                                <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                    Vestibulum ligula.</li>
                                                <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                    eget aliquet et.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="car__details__tab__feature">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Interior Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                <li><i class="fa fa-check-circle"></i> CD player</li>
                                                <li><i class="fa fa-check-circle"></i> Central locking</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Safety Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Extra Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Extra Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="car__details__tab__info">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>General Information4</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                    consectetur nec</li>
                                                <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                    lectus vitae.</li>
                                                <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                    sit amet felis ido.</li>
                                                <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                    Vestibulum ligula.</li>
                                                <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                    eget aliquet et.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="car__details__tab__info__item">
                                            <h5>General Information</h5>
                                            <ul>
                                                <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat non
                                                    consectetur nec</li>
                                                <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                    lectus vitae.</li>
                                                <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                    sit amet felis ido.</li>
                                                <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                    Vestibulum ligula.</li>
                                                <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                    eget aliquet et.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="car__details__tab__feature">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Interior Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                <li><i class="fa fa-check-circle"></i> CD player</li>
                                                <li><i class="fa fa-check-circle"></i> Central locking</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Safety Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Extra Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <div class="car__details__tab__feature__item">
                                            <h5>Extra Design</h5>
                                            <ul>
                                                <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="car__details__sidebar">
                    
                    <div class="car__details__sidebar__model">
                        
                        <ul>
                            <li>Year <span>{{$cars->year}}</span></li>
                            <li>Vin <span>{{$cars->unique_sku}}</span></li>
                        </ul>
                        <a href="{{route('bookcar', $cars->id)}}" class="primary-btn">Book A Test Drive</a>
                        <p>{{$cars->name}}</p>
                    </div>
                    <div class="car__details__sidebar__payment">
                        <ul>
                            <li>MSRP <span>${{number_format($cars->price)}}</span></li>
                            <li>Dealer Discounts <span>$3,000</span></li>
                            <li>Price Per Month(5y) <span>${{number_format(round($cars->price / 56))}}</span></li>
                        </ul>
                        <a href="#" class="primary-btn"><i class="fa fa-credit-card"></i>{{$cars->offer->name}}</a>
                        <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-money"></i> Get A Finance Check </a>
                        
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Details Section End -->


@endsection