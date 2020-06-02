@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h4><a href="{{route('cars.create')}}">Add Car</a></h4>
                </div>
                
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Photo</th>
                            <th>ID</th>
                            <th>VIN</th>
                            <th>Name</th>
                            <th>Year</th>
                            <th>Mileage</th>
                            <th>Price</th>
                            <th>Sale Type</th>
                            <th>Condition</th>
                            <th>Posted At</th>
                            <th>Model</th>
                            <th>Brand</th>
                            <th>See Car</th>
                        </thead>
                        <tbody>
                            @foreach($cars as $car)
                                <tr>   
                                    <td><img height="70" src="{{$car->carImage ? $car->carImage->path : 'No Photo'}}"></td>
                                    <td>{{$car->id}}</td>
                                    <td>{{$car->unique_sku}}</td>
                                    <td>{{$car->name}}</td>
                                    <td>{{$car->year}}</td>
                                    <td>{{$car->mileage}}</td>
                                    <td>{{number_format($car->price)}}$</td>
                                    <td>{{$car->offer ? $car->offer->name : 'Not yet defined'}}</td>
                                    <td>{{$car->carCondition ? $car->carCondition->name : 'Under Inspection'}}</td>
                                    <td>{{$car->created_at ? $car->created_at->diffForHumans() : 'Unknown'}}</td>
                                    <td>{{$car->carModel ? $car->carModel->name : 'Unknown'}}</td>
                                    <td>{{$car->carBrand ? $car->carBrand->name : 'Unknown'}}</td>
                                    <td><a href="">Link</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection