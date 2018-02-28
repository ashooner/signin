@extends('layouts.app')

@section('content')

    <div class="row">

            <h1 class="text-center">Administer Event: {{ $event->name }}</h1>

            <div class="col-md-4 col-md-offset-4">
             <p>{{ $event->name }}</p>
            </div>

        </div>

        <div class="col-md-6 col-md-offset-3">

            <h2>List of Attendees</h2>
        <ul class="list-group">
            @foreach ($event->attendees as $attendees)
                <li class="list-group-item">{{ $attendees->name }} <a class="btn pull-right" href="{{route('admin.attendees.delete', $attendees->id)}}">Delete</a></li>
            @endforeach
        </ul>

        </div>

    </div>

    <div class="col-md-6 col-md-offset-3">

    <form> <a href="{{url('/events/'. $event->id .'/signin')}}" class="btn btn-default" role="button">Sign in</a></form>
    <a href="{{url('/admin/events/'. $event->id .'/download')}}" class="btn btn-default" role="button">Download</a>
    </div>
@stop
