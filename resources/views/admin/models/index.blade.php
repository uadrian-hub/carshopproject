@extends('admin.layout')

@section('content')

<h1>Models</h1>

<div class="col-sm-6">
    @if($models)
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>See Cars</th>
            </tr>
        </thead>
        
        @foreach($models as $model)
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->name}}</td>
            <td><a href="#">Link</a></td>
        </tr>
        @endforeach
    </table>
    @endif
    {{ $models->render() }}
</div>


<div class="col-sm-6">
    <form method="POST" action="{{action('admin\ModelController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control col-sm-5" name="name">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add Model">
        </div>
    </form>
</div> 

<div class="col-sm-6">
    <form method="GET" action="{{action('admin\ModelController@attachToModel')}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="brand_id"> Brand </label>
        </br>
            <select class="form-control col-sm-5" name="brand_id">
                <option value="{{ null }}"> Select Type </option>
                @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="model_id"> Brand </label>
        </br>
            <select class="form-control col-sm-5" name="model_id">
                <option value="{{ null }}"> Select Type </option>
                @foreach($models as $model)
                <option value="{{$model->id}}">{{$model->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Attach Model">
        </div>
    </form>
</div>
<!-- End Create Brand Section -->

<!-- Start Showing brand table -->


@endsection