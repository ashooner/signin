@extends('layouts.app')
@section('content')


    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center">Event Admin</h1>

            <h2 class=" text-center">{{$monthName}} {{$year}}</h2>

            <a href="{{ route('admin.event.create') }}" class="btn btn-lg btn-success btn-block">Add New Event</a>
        </div>
    </div>



    <div class="row" style="margin-top:50px">

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
                    <th>

                    </th>
                </tr>
                </thead>

                <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{$event->date}}</td>
                        <td><a href="{{url('/admin/event/'. $event->id)}}">{{ $event->name}}</a></td>
                        <td>{{$event->attendees_count}}</td>
                        <td><a href="{{url('/admin/event/'. $event->id .'/download')}}">Download CSV</a></td>

                    </tr>
                @endforeach
                </tbody>

            </table>


        </div>


    </div>

@stop

