@extends('layouts.app')
@section('content')

    <h1 class="text-center">Create a New Event</h1>

    <hr>


    <div class="row">

        <div class="col-md-6 col-md-offset-3">


            {!! Form::open(['url' => 'events/new']) !!}

            {!! Form::label('name'); !!}
            {!! Form::text('name'); !!}

            {!! Form::submit('Click Me!'); !!}

            {!! Form::close(); !!}

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

@stop
