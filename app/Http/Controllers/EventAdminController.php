<?php

namespace App\Http\Controllers;

use DB;
use App\Event;
use Illuminate\Http\Request;

class EventAdminController extends Controller
{

    public function index()
    {
        /*$events = Event::all();*/
        $events = Event::paginate(15);
        return view('admin.events.index', compact('events') );
    }
    public function show(Event $event)
    {
        return view('admin.events.show', compact('event'));
    }

    public function create()
    {
        return view('admin.events.create', compact('event'));
    }

    public function store(Request $request)
    {
        $events = new Event;
        $events->name = $request->name;
        $events->date = $request->date;
        $events->description = $request->description;
        $events->type = $request->type;
        $events->save();

        return redirect('/admin/events/' );
    }


    public function download(Event $event){
        $attendees = $event->attendees;
        $csvExporter = new \Laracsv\Export();
        $csvExporter->build($attendees, ['name', 'role', 'county', 'email'])->download($event->name.'_'.$event->date.'.csv');


    }
}
