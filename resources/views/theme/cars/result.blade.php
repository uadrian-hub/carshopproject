@extends('theme.layout')

@section('content')
@include('theme.includes.carJs')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="{{asset('theme/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Car Listing</h2>
                    <div class="breadcrumb__links">
                        <a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                        <span>Cars</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Ends -->

<!-- Car Section Begin -->
<section class="car spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-9">
                <div class="car__filter__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($cars as $car)
                    <div class="col-lg-5 col-md-4">
                        <div class="car__item">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="{{asset('theme/img/cars/car-1.jpg')}}" alt="">
                                <img src="{{asset('theme/img/cars/car-8.jpg')}}" alt="">
                                <img src="{{asset('theme/img/cars/car-6.jpg')}}" alt="">
                                <img src="{{asset('theme/img/cars/car-3.jpg')}}" alt="">
                            </div>
                            <div class="car__item__text">
                                <div class="car__item__text__inner">
                                    <div class="label-date">{{$car->year}}</div>
                                    <h5><a href="{{route('showcar')}}">{{$car->name}}</a></h5>
                                    <ul>
                                        <li><span>{{$car->mileage}}</span> mi</li>
                                        <li>{{$car->transmision->type}}</li>
                                        <li><span>{{$car->horsepower}}</span> hp</li>
                                    </ul>
                                </div>
                                <div class="car__item__price">
                                    <span class="car-option">{{$car->offer->name}}</span>
                                    <h6>$218<span>/Month</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Section End -->
@endsection