@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h4><a href="#">Add User</a></h4>
                </div>
                
                <div class="card-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>Photo</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>   
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at ? $user->created_at->diffForHumans() : 'No Info'}}</td>
                                    <td>{{$user->updated_at ? $user->updated_at->diffForHumans() : 'No info'}}</td>
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