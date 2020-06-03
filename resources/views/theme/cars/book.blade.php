@extends('theme.layout')

@section('content')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="{{asset('theme/img/breadcrumb-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Book Car </h2>
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Book Car</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <h2>Let's take it for a ride</h2>
                        <p>We may need aditional informations before finishing your booking, we will let you know , if that is not the case you will get an email with the test drive date , whitch can be changed after.</p>
                    </div>
                    <ul>
                        <li><span>Weekday</span> 08:00 am to 18:00 pm</li>
                        <li><span>Saturday:</span> 10:00 am to 16:00 pm</li>
                        <li><span>Sunday:</span> Closed</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="{{action('BookingController@store')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$cars->unique_sku}}" name="unique_sku">
                        <input type="hidden" value="{{$cars->id}}" name="car_id">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="First Name" name="first_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Last Name" name="last_name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email" name="email">
                            </div>
                            <br>
                            
                        </div>
                        
                        <h3>Car Details</h3>
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="brandId">Brand</label>
                                <input type="text" value="{{$cars->carBrand->name}}" name="brandId" disabled="disabled">
                            </div>
                            <div class="col-lg-3">
                                <label for="modelId">Model</label>
                                <input type="text" value="{{$cars->carModel->name}}" name="modelId" disabled="disabled">
                            </div>
                            <div class="col-lg-3">
                                <label for="hsId">HS</label>
                                <input type="text" value="{{$cars->horsepower}}" name="hsId" disabled="disabled">
                            </div>
                            <div class="col-lg-3">
                                <label for="transmisionId">Transmission</label>
                                <input type="text" value="{{$cars->transmision->type}}" name="transmisionId" disabled="disabled">
                            </div>
                        </div>
                        <button type="submit" class="site-btn">Request test drive</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Contact Address Begin -->
<div class="contact-address">
    <div class="container">
        <div class="contact__address__text">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__address__item">
                        <h4>California Showroom</h4>
                        <p>625 Gloria Union, California, United Stated Colorlib.california@gmail.com</p>
                        <span>(+12) 456 678 9100</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__address__item">
                        <h4>New York Showroom</h4>
                        <p>8235 South Ave. Jamestown, NewYork Colorlib.Newyork@gmail.com</p>
                        <span>(+12) 456 678 9100</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="contact__address__item">
                        <h4>Florida Showroom</h4>
                        <p>497 Beaver Ridge St. Daytona Beach, Florida Colorlib.california@gmail.com</p>
                        <span>(+12) 456 678 9100</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Address End -->

@endsection