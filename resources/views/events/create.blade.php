@extends('layouts.app')
@section('content')

    <h1 class="text-center">Create a New Event</h1>

    <hr>


    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <form method="POST" action="{{url('/events/new/')}}">
                {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Cooking Class (2/16)" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="2017-11-14" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="FF" id="type" name="type">
                        <label class="form-check-label" for="type">
                            Is this a First Friday event?
                        </label>
                    </div>

                    <button type="submit" class="btn btn-success">Submit New Event</button>

            </form>
        </div>


    </div>

@stop
