<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Attendee;
use App\Event;

class SigninController extends Controller
{
    public function create($eventId)
    {
        $event = Event::find($eventId);

//        dd($event);
        return view('signin', ['event'=>$event]);
    }

    public function store(Request $request)
    {

        $eventId =  Route::input('event');
        $attendee = new Attendee;
        $attendee->event_id = $eventId;//prob not mass assignable
        $attendee->name = ucwords($request->name); //converts the first letters of words to caps
        $attendee->role = $request->role;
        $attendee->county = $request->county;
        $attendee->email = $request->email;
        $attendee->linkblue = $request->linkblue;
        //requires input to the email to be an email, currently discards the signin if it is not
        //$attendee->email = $request->validate([
        //   'email' => 'email',
        //]);
        $attendee->save();

        return redirect('/event/'. $eventId );

//        $event($attendee)->save($attendee);
    }

}