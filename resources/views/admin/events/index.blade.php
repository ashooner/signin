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

        <ul class="list-group">
            @foreach ($events as $event)
                <li class="list-group-item"><a href="{{route("admin.events.show",$event->id)}}">{{ $event->name}}</a></li>
            @endforeach
        </ul>

        {{ $events->links() }}


        </div>


    </div>

@stop
