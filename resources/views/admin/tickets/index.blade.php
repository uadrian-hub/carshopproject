@extends('admin.layout')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h4><a href="#">Tickets</a></h4>
                </div>
                
                <div class="card-body">
                    @if(count($tickets) > 0 )
                    <table class="table table-bordered table-stripped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Question</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Respond</th>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                                <tr>   
                                    <td>{{$ticket->id}}</td>
                                    <td>{{$ticket->name}}</td>
                                    <td>{{$ticket->email}}</td>
                                    <td>{{$ticket->subject}}</td>
                                    <td>{{$ticket->question}}</td>
                                    <td>{{$ticket->created_at ? $ticket->created_at->diffForHumans() : 'No info' }}</td>
                                    <td>{{$ticket->updated_at ? $ticket->updated_at->diffForHumans() : 'No info' }}</td>
                                    <td><a href="">Link</a></td>
                                </tr>
                                @endforeach
                            @else
                            <h3>No tickets to respond</h3>
                            
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection