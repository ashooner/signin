@extends('layouts.app')

@section('content')

    <div class="row">

            <h1 class="text-center">{{ $event->name }}</h1>

    <hr>

        <div class="col-md-6 col-md-offset-3">


            <form>
                <a href="{{url('/events/'. $event->id .'/signin')}}" class="btn btn-primary btn-block" role="button">Sign in</a>
            </form>

            <br>
        </div>



        <div class="col-md-6 col-md-offset-3">

        <ul class="list-group">
            @foreach ($event->attendees as $attendees)
                <li class="list-group-item">{{ $attendees->name }} </li>
            @endforeach
        </ul>

        </div>

    </div>


@stop
