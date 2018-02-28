@extends('layouts.app')

@section('content')


    <h1 class="text-center">FoodConnection Signin</h1>

    <hr>


    <div class="row">

        <div class="col-md-6 col-md-offset-3">
                <div class="btn-group btn-group-justified btn-group-lg">
                    <a href="{{ route('events')}}" class="btn btn-success btn-lg" role="button" >Check-In Guests</a>
                    <a href="{{ route('admin.events') }}" class="btn btn-success btn-lg" role="button" >Admin</a>
                </div>

        </div>
    </div>


@endsection
