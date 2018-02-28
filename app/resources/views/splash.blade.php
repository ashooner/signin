@extends('layouts.app')
@section('content')

    <h1 class="text-center">Welcome</h1>

    <hr>

    <div class="col-sm-6 col-sm-offset-5">
        <a href="{{url('/events/index')}}" class="btn btn-lg btn-success">Check In Guests</a>
    </div>

    <div class="col-sm-6 col-sm-offset-5">
        <a href="{{url('/events/admin')}}" class="btn btn-lg btn-success">Admin</a>
    </div>

@endsection