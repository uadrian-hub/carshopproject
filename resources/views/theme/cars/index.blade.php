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
                <div class="car__sidebar">
                    <div class="car__search">
                        <h5>Car Search</h5>
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="car__filter">
                        <h5>Car Filter</h5>
                        <form method="GET" action="{{action('CarController@index')}}">
                            
                            <select name="brand" id="brand_id">
                                <option data-display="Brand">Select Brand</option>
                                @foreach(App\Brand::all() as $brand)
                               <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                            {{-- <select name="" id="model_id">
                                <option data-display="Model">Select Model</option>
                                @foreach(App\ModelCar::all() as $model)
                                <option value="{{$model->id}}">{{$model->name}}</option>
                                @endforeach
                            </select>
                            <select id="body_id">
                                <option data-display="Body" value="">Body Style</option>
                                @foreach(App\Body::all() as $body)
                                <option value="{{$body->id}}">{{$body->name}}</option>
                                @endforeach
                            </select> --}}
                            <select name="condId" id="condition_id">
                                <option value="">Condition</option>
                                @foreach(App\Condition::all() as $condition)
                                <option value="{{$condition->id}}">{{$condition->name}}</option>
                                @endforeach
                            </select>
                            <select name="transmision" class="transId">
                                <option value="">Transmission</option>
                                @foreach(App\Transmision::all() as $transmision)
                                <option value="{{$transmision->id}}">{{$transmision->type}}</option>
                                @endforeach
                            </select>
                            <div class="filter-price">
                                <p>Price:</p>
                                <div class="price-range-wrap">
                                    <div class="filter-price-range"></div>
                                    <div class="range-slider">
                                        <div class="price-input">
                                            <input type="text" id="filterAmount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="car__filter__btn">
                                <button type="submit" class="site-btn">Filter</button>
                            </div>
                            <br>
                        </form>
                        <form method="GET" action="{{action('CarController@index')}}">
                        <div class="car__filter__btn">
                            <button type="submit" class="site-btn">Reset Filter</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="car__filter__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item">
                                <h6>Show On Page</h6>
                                <select>
                                    <option value="">9 Car</option>
                                    <option value="">15 Car</option>
                                    <option value="">20 Car</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="car__filter__option__item car__filter__option__item--right">
                                <h6>Sort By</h6>
                                <select>
                                    <option value="">Price: Highest Fist</option>
                                    <option value="">Price: Lowest Fist</option>
                                </select>
                            </div>
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
                                    <h5><a href="{{route('showcar', $car->id)}}">{{$car->name}}</a></h5>
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
                <div class="pagination__option">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><span class="arrow_carrot-2right"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Section End -->
@endsection