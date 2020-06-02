@extends('admin.layout')

@section('content')

<h1>Roles</h1>

<div class="col-sm-6">
    @if($roles)
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>
                <form method="POST" action="{{action('admin\RoleEmployeesController@destroy', $role->id)}}">
                {{ method_field('DELETE') }}
                <input type="hidden" value={{$role->id}} name="id">
                @csrf
                <div class="form-group">
                    <input type="submit" value="X" class="btn btn-danger col-sm-3">
                </div>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endif
    {{ $roles->links() }}
</div>


<div class="col-sm-6">
    <form method="POST" action="{{action('admin\RoleEmployeesController@store')}}">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Add Role">
        </div>

    </form>
</div> 
<!-- End Create Brand Section -->

<!-- Start Showing brand table -->


@endsection