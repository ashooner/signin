@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Event Sign-In</h1>

            <hr>
        </div>
    </div>

    @if(!$todaysEvents->isEmpty())
    <div class="row">
        <div class="col-md-12 text-center">
            <h3>Today's Events</h3>
                <div class="col-md-8 col-md-offset-2">
                @foreach ($todaysEvents as $event)
                <a href="/event/{{$event->id}}" class="btn btn-primary btn-lg btn-block">{{$event->name}}</a>
                @endforeach
                </div>
            </>
        </div>
    </div>
    @endif

    <div class="row" style="margin-bottom:20px">

        <div class="col-md-12 text-center">
        <h3>{{$monthName}} {{$year}} Events</h3>
        </div>
    </div>
    <div class="row">

        @if($previousMonth)
            <div class="col-md-3 col-md-offset-1 text-center">
                <a href="{{ $previousMonth->format('Y-m') }}"><< {{ $previousMonth->format('F Y')}}</a>
            </div>
        @endif


        @if($nextMonth)
            <div class="col-md-3  col-md-offset-4 text-center">
                <a href="{{ $nextMonth->format('Y-m') }}">{{ $nextMonth->format('F Y')}} >></a>
            </div>
        @endif


    </div>


    <div class="row">
        <div class="col-md-8 col-md-offset-2">


            <table class="table table-bordered table-condensed table-hover">
                <thead>
                <tr>
                    <th>
                        Date
                    </th>
                    <th>
                        Event name
                    </th>
                    <th>
                        Attendee count
                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{$event->date}}</td>
                        <td><a href="{{url('/event/'. $event->id)}}">{{ $event->name}}</a></td>
                        <td>{{$event->attendees_count}}</td>

                    </tr>
                @endforeach
                </tbody>

            </table>


        </div>


    </div>
</div>

@stop
