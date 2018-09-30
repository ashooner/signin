@extends('layouts.app')

@section('content')

    <div class="row">

            <h1 class="text-center">{{ $event->name }}</h1>

            <div class="col-md-4 col-md-offset-4">
             <p>{{ $event->name }}</p>
            </div>

        </div>

        <hr>

        <div class="col-md-6 col-md-offset-3">

            <h2>List of Attendees</h2>
        <ol class="list-group">
            @foreach ($event->attendees as $attendees)
                <li class="list-group-item">{{ $attendees->name }}{{--<a class="btn pull-right" href="{{route('admin.attendees.delete', $attendees->id)}}">Delete</a>--}}</li>
            @endforeach
        </ol>

        </div>

    </div>

    <div class="col-md-6 col-md-offset-3">

        <p class = "tpbutton btn-toolbar text-center">
            <a href="{{url('/admin/event/'. $event->id .'/download')}}" class="btn btn-success" role="button">Download Attendee List</a>
            {{--<a href="{{url('/events/'. $event->id .'/signin')}}" class="btn btn-warning" role="button">Add Attendee</a>--}}
        </p>

    </div>

    <hr>



@stop
