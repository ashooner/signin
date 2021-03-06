@extends('layouts.app')
@section('content')

    <h1 class="text-center">Sign-In</h1>
    <h2 class="text-center">{{$event->name}}</h2>

    <hr>


    <div class="row">

        <div class="col-md-6 col-md-offset-3">

            <form method="POST" action="{{url('/event/'.$event->id.'/signin')}}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                </div>

                <label for="role">Email</label>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                </div>

                <label for="role">Select your role:</label>
                <div class="radio">
                    <label><input type="radio" id="role1" name="role" value="Community Member">Community Member</label>
                </div>
                <div class="radio">
                    <label><input type="radio" id="role2" name="role" value="UK Student" required>UK Student</label>
                </div>
                <div class="radio">
                    <label><input type="radio" id="role3" name="role" value="UK Staff or Faculty">UK Staff or Faculty</label>
                </div>
                <div class="radio">
                    <label><input type="radio" id="role4" name="role" value="Cooperative Extention Agent">Cooperative Extention Agent</label>
                </div>


                <div id="uk-only" style="display:none">

                    <div class="form-group" id="extension-only" style="display:none">
                        <label for="role">Cooperative Extention county or district:</label>
                        <select class="form-control" id="county" name="county">
                            <option></option>
                            <option>Adair</option>
                            <option>Allen</option>
                            <option>Anderson</option>
                            <option>Ballard</option>
                            <option>Barren</option>
                            <option>Bath</option>
                            <option>Bell</option>
                            <option>Boone</option>
                            <option>Bourbon</option>
                            <option>Boyd</option>
                            <option>Boyle</option>
                            <option>Bracken</option>
                            <option>Breathitt</option>
                            <option>Breckenridge</option>
                            <option>Bullitt</option>
                            <option>Butler</option>
                            <option>Caldwell</option>
                            <option>Calloway</option>
                            <option>Campbell</option>
                            <option>Carlisle</option>
                            <option>Carroll</option>
                            <option>Carter</option>
                            <option>Casey</option>
                            <option>Christian</option>
                            <option>Clark</option>
                            <option>Clay</option>
                            <option>Clinton</option>
                            <option>Crittenden</option>
                            <option>Cumberland</option>
                            <option>Daviess</option>
                            <option>Edmonson</option>
                            <option>Elliott</option>
                            <option>Estill</option>
                            <option>Fayette</option>
                            <option>Fleming</option>
                            <option>Floyd</option>
                            <option>Franklin</option>
                            <option>Fulton</option>
                            <option>Gallatin</option>
                            <option>Garrard</option>
                            <option>Grant</option>
                            <option>Graves</option>
                            <option>Grayson</option>
                            <option>Green</option>
                            <option>Greenup</option>
                            <option>Hancock</option>
                            <option>Hardin</option>
                            <option>Harlan</option>
                            <option>Harrison</option>
                            <option>Hart</option>
                            <option>Henderson</option>
                            <option>Henry</option>
                            <option>Hickman</option>
                            <option>Hopkins</option>
                            <option>Jackson</option>
                            <option>Jefferson</option>
                            <option>Jessamine</option>
                            <option>Johnson</option>
                            <option>Kenton</option>
                            <option>Knott</option>
                            <option>Knox</option>
                            <option>Larue</option>
                            <option>Laurel</option>
                            <option>Lawrence</option>
                            <option>Lee</option>
                            <option>Leslie</option>
                            <option>Letcher</option>
                            <option>Lewis</option>
                            <option>Lincoln</option>
                            <option>Livingston</option>
                            <option>Logan</option>
                            <option>Lyon</option>
                            <option>Madison</option>
                            <option>Magoffin</option>
                            <option>Marion</option>
                            <option>Marshall</option>
                            <option>Martin</option>
                            <option>Mason</option>
                            <option>McCracken</option>
                            <option>McCreary</option>
                            <option>McLean</option>
                            <option>Meade</option>
                            <option>Menifee</option>
                            <option>Mercer</option>
                            <option>Metcalfe</option>
                            <option>Monroe</option>
                            <option>Montgomery</option>
                            <option>Morgan</option>
                            <option>Muhlenberg</option>
                            <option>Nelson</option>
                            <option>Nicholas</option>
                            <option>Ohio</option>
                            <option>Oldham</option>
                            <option>Owen</option>
                            <option>Owsley</option>
                            <option>Pendleton</option>
                            <option>Perry</option>
                            <option>Pike</option>
                            <option>Powell</option>
                            <option>Pulaski</option>
                            <option>Robertson</option>
                            <option>Rockcastle</option>
                            <option>Rowan</option>
                            <option>Russell</option>
                            <option>Scott</option>
                            <option>Shelby</option>
                            <option>Simpson</option>
                            <option>Spencer</option>
                            <option>Taylor</option>
                            <option>Todd</option>
                            <option>Trigg</option>
                            <option>Trimble</option>
                            <option>Union</option>
                            <option>Warren</option>
                            <option>Washington</option>
                            <option>Wayne</option>
                            <option>Webster</option>
                            <option>Whitley</option>
                            <option>Wolfe</option>
                            <option>Woodford</option>
                            <option>District 1</option>
                            <option>District 2</option>
                            <option>District 3</option>
                            <option>District 4</option>
                            <option>District 5</option>
                            <option>District 6</option>
                            <option>District 7</option>
                        </select>
                    </div>

                </div><!-- /#uk-only -->

                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("input[name=role]").on("click", function(){
                var roleValue = $('input[name=role]:checked').val();

               if (roleValue == "Community Member"){
                   $("#uk-only").hide();
                   $('#linkblue').val("");
                   $('#county').val("");
               } else {
                   if (roleValue == "Cooperative Extention Agent"){
                    $("#extension-only").show();
                   }else{
                       $('#county').val("");
                       $("#extension-only").hide();
                   }
                   $("#uk-only").show();
               }

            });
        });
    </script>
@stop
