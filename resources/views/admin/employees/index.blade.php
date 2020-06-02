@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h4><a href="#">Add Employee</a></h4>
                </div>
                
                <div class="card-body">
                    @if(count($employees) > 0)
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
                            
                            @foreach($employees as $employee)
                                <tr>   
                                    <td>{{$employee->id}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->role->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->created_at ? $user->created_at->diffForHumans() : 'No Info'}}</td>
                                    <td>{{$employee->updated_at ? $user->updated_at->diffForHumans() : 'No info'}}</td>
                                    <td><a href="">Link</a></td>
                                </tr>
                            @endforeach
                            @else
                            <h2>No Employees</h2>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection