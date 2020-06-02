@extends('admin.layout')

@section('content')

<h1>Brands</h1>

<div class="col-sm-6">
    @if($brands)
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Models</th>
                {{-- <th>Delete From Stock</th> --}}
            </tr>
        </thead>
        
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->name}}</td>
            <td>{{$brand->models ? count($brand->models) : 'no models'}}</td>
            {{-- <td>
                <form method="POST" action="{{action('admin\BrandController@destroy', $brand->id)}}">
                {{ method_field('DELETE') }}
                @csrf
                <div class="form-group">
                    <input type="submit" value="Delete" class="btn btn-primary col-sm-3">
                </div>
                </form>
            </td> --}}
        </tr>
        @endforeach
    </table>
    @endif
    {{ $brands->render() }}
</div>


<div class="col-sm-6">
    <form method="POST" action="{{action('admin\BrandController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add Brand">
        </div>

    </form>
</div> 
<!-- End Create Brand Section -->

<!-- Start Showing brand table -->


@endsection