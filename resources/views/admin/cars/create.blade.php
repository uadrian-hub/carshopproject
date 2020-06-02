@extends('admin.layout')

@section('content')

<h3>Add New Car</h3>
<div class="container">
<form method="POST" action="{{ action('admin\CarController@store')}}" enctype="multipart/form-data">
{{ csrf_field() }}

<div class="form-group">
    <label for="unique_sku">VIN - Unique car number</label>
    <input type="text" class="form-control" name="unique_sku">
</div>

<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name">
</div>

<div class="form-group">
    <label for="mileage">Mileage</label>
    <input type="text" class="form-control" name="mileage">
</div>

<div class="form-group">
    <label for="year">Year</label>
    <input type="text" name="year" class="form-control">
</div>

<div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price">
</div>

<div class="form-group">
    <label for="photo_id">Photo</label>
    <input type="file" class="form-control" name="photo_id">
</div>

<div class="form-group">
    <label for="short_description">Short Description</label>
    <input type="text" class="form-control" name="short_description">
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" cols="60" rows="5"></textarea>
</div>

<div class="form-group">
    <label for="sale_type">Sale Type</label>
</br>
    <select name="sale_type">
        <option value="{{ null }}"> Select Type </option>
        @foreach($offers as $offer)
        <option value="{{$offer->id}}">{{$offer->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="condition_id"> Condition </label>
</br>
    <select name="condition_id">
        <option value="{{ null }}"> Select Condition </option>
        @foreach($conditions as $condition)
        <option value="{{$condition->id}}">{{$condition->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="brand"> Brand </label>
</br>
    <select name="brand">
        <option value="{{ null }}"> Select Brand </option>
        @foreach($brands as $brand)
        <option value="{{$brand->id}}">{{$brand->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="model"> Model </label>
</br>
    <select name="model">
        <option value="{{ null }}"> Select Model </option>
        @foreach($models as $model)
        <option value="{{$model->id}}">{{$model->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <input type="submit" class="btn btn-primary" value="Add Car">
</div>

</form>
</div>
@endsection