@extends('layouts.app')
@section('content')

    <div class="row">

        <h1 class="text-center">Event Admin</h1>

    <hr>


        <div class="col-md-6 col-md-offset-3">
            <form>
            <a href="{{ route('admin.events.create') }}" class="btn btn-lg btn-success btn-block">Add New Event</a>
            </form>

            <br>
        </div>


        <div class="col-md-6 col-md-offset-3">

   {{-- @foreach ($events as $event)
    <div>
        <a href="/events/{{$event->id}}">{{ $event->name}}</a>
    </div>
    @endforeach--}}

        <ul class="list-group">
            @foreach ($events as $event)
                <li class="list-group-item"><a href="{{route("admin.events.show",$event->id)}}">{{ $event->name}}</a></li>
            @endforeach
        </ul>


        </div>


        {{--<div class="col-sm-6 col-sm-offset-5">
            <a href="{{ route('admin.events.create') }}" class="btn btn-lg btn-success">Add New Event</a>
        </div>--}}

    </div>

@stop
