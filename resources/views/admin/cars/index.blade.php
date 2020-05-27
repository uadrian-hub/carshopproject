@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Cars</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>ID</th>
                            <th>VIN</th>
                            <th>Name</th>
                            <th>Year</th>
                            <th>Mileage</th>
                            <th>Price</th>
                            <th>Sale Type</th>
                            <th>Condition</th>
                            <th>Posted At</th>
                            <th>See Car</th>
                        </thead>
                        <tbody>
                            @foreach($cars as $car)
                                <tr>   
                                    <td>{{$car->id}}</td>
                                    <td>{{$car->unique_sku}}</td>
                                    <td>{{$car->name}}</td>
                                    <td>{{$car->year}}</td>
                                    <td>{{$car->mileage}}</td>
                                    <td>{{$car->price}}</td>
                                    <td>{{$car->offer ? $car->offer->name : 'Not yet defined'}}</td>
                                    <td>{{$car->carCondition ? $car->carCondition->name : 'Under Inspection'}}</td>
                                    <td>{{$car->created_at ? $car->created_at->diffForHumans() : 'Unknown'}}</td>
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