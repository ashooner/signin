<?php
namespace App\Http\Controllers;
use DB;
use App\Event;
use Illuminate\Http\Request;
class EventController extends Controller
{
    //
    public function index()
    {
        /*$events = Event::all();*/
        $events = Event::paginate(15);
        // added to fix the 404 error in the events list
        $events->withPath('signin/events');
        return view('events.index', compact('events') );
    }
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function create()
    {
        return view('events.create', compact('event'));
    }

    public function store(Request $request)
    {
        $events = new Event;
        $events->name = $request->name;
        $events->date = $request->date;
        $events->description = $request->description;
        $events->type = $request->type;
        $events->save();

        return redirect('/events/' );
    }
}