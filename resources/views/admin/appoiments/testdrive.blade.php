@extends('admin.layout')

@section('content')

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading"> Test Calendar</div>
          <div class="panel-body">
              
              <form action="{{action('admin\AppoimentController@addEvent')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                   <div class="col-xs-12 sm-12 col-md-12">

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success')}}
                        </div>
                        @elseif (Session::has('warning'))
                        <div class="alert alert-danger">
                            {{ Session::get('warning')}}
                        </div>
                        @endif
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="event_name">Event Name</label>
                            <input type="text" class="form-control" name="event_name">
                            {!! $errors->first('event_name', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="first_name">Client First Name</label>
                            <input type="text" class="form-control" name="first_name" >
                            {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="last_name">Client Last Name</label>
                            <input type="text" class="form-control" name="last_name" >
                            {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="email">Client Email</label>
                            <input type="text" class="form-control" name="email" >
                            {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>
                    
               
                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="date" class="form-control" name="start_date">
                            {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>

                    <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <div class="">
                            <input type="date" class="form-control" name="end_date">
                            {!! $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Add Event" class="form-control btn btn-primary" >
                        </div>
                    </div>
                    </div>
                       
                </div>
              </form>
            </div>
    <div class="panel panel-primary">
        <div class="panel-heading">My Bookins</div>
        <div class="panel-body">
            {!! $calendar_details->calendar() !!}
        </div>
    </div>
</div>
</div>

@section('scripts')

{!! $calendar_details->script() !!}

@endsection
@endsection