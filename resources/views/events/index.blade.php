@extends('layouts.app')
@section('content')

    <h1 class="text-center">Event Sign-In</h1>

    <hr>


    <div class="row">


        <div class="col-md-6 col-md-offset-3">

   {{-- @foreach ($events as $event)
    <div>
        <a href="/events/{{$event->id}}">{{ $event->name}}</a>
    </div>
    @endforeach--}}

        <ul class="list-group">
            @foreach ($events as $event)
                <li class="list-group-item"><a href="{{url('/events/'.$event->id)}}">{{ $event->name}}</a></li>
            @endforeach
        </ul>


        </div>


        {{--<div class="col-sm-6 col-sm-offset-5">
            <a href="{{url('/events/new')}}" class="btn btn-lg btn-success">Add New Event</a>
        </div>--}}

    </div>

@stop
