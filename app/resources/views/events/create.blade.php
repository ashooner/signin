@extends('layouts.app')
@section('content')

    <h1 class="text-center">Create a New Event</h1>

    <hr>

    <form method="POST" action="{{url('/events/new')}}">
        {!! csrf_field() !!}
    <div class="row">

        <div class="col-md-6 col-md-offset-3">


            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="ex. Cooking Class (11/24)">
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input class="form-control" name="date" type="date" value="2018-11-24" id="date">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="FF" name="type" id="type">
                <label class="form-check-label" for="type">
                    Is this a First Friday event?
                </label>
            </div>

            <button type="submit" class="btn btn-default">Submit New Event</button>
            {{--{!! Form::open(['url' => 'events/new']) !!}--}}

            {{--{!! Form::label('name'); !!}
            {!! Form::text('name'); !!}--}}

            {{--{!! Form::label('description'); !!}
            {!! Form::textarea('description'); !!}--}}



            {{--{!! Form::submit('Submit New Event'); !!}

            {!! Form::close(); !!}--}}

            {{--<form class="form-horizontal">--}}
                {{--<fieldset>--}}

                    {{--<!-- Form Name -->--}}

                    {{--<!-- Text input-->--}}
                    {{--<div class="form-group">--}}
                        {{--<label class="col-md-4 control-label" for="textinput">Event Name</label>--}}
                        {{--<div class="col-md-5">--}}
                            {{--<input id="textinput" name="textinput" type="text" placeholder="name" class="form-control input-md" required>--}}

                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Text input-->--}}
                    {{--<div class="form-group">--}}
                        {{--<label class="col-md-4 control-label" for="textinput">Date &amp; Time</label>--}}
                        {{--<div class="col-md-5">--}}
                            {{--<input id="textinput" name="textinput" type="date" placeholder="placeholder" class="form-control input-md" required>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- Textarea -->--}}
                    {{--<div class="form-group">--}}
                        {{--<label class="col-md-4 control-label" for="description">Description</label>--}}
                        {{--<div class="col-md-4">--}}
                            {{--<textarea class="form-control" id="description" name="description"></textarea>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</fieldset>--}}
            {{--</form>--}}



        </div>


    </div>
    </form>
@stop
