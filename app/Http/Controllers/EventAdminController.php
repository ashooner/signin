<?php

namespace App\Http\Controllers;

use DB;
use App\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventAdminController extends Controller
{

    public function redirect(){
        $lastMonth = self::getMonthRange()[1];
        return redirect()->route('admin.events',['month'=>$lastMonth]);
    }

    public function index($month)
    {

        $date = Carbon::parse($month);
        $monthName = $date->format('F');
        $year = $date->format('Y');
        $firstDate = $date->firstOfMonth()->format("Y-m-d");
        $lastDate = $date->lastOfMonth()->format("Y-m-d");

        $events = Event::whereBetween('date', [$firstDate, $lastDate])->withCount('attendees')->get();

        return view(
            'admin.events.index',
            [
                'monthName'=>$monthName,
                'year'=>$year,
                'month'=>$month,
                'nextMonth'=> $this->getAdjacentDate($month, false),
                'previousMonth'=>$this->getAdjacentDate($month),
                'events'=>$events
            ]

            );
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
        $csvExporter->build($attendees, ['name', 'linkblue', 'role', 'county', 'email'])->download($event->date.'.csv');


    }

    protected function getMonthRange(){
        $first_event_month = new Carbon(Event::orderBy('date', 'asc')->first()->date);
        $last_event_month = new Carbon(Event::orderBy('date', 'dsc')->first()->date);
        return([$first_event_month->format("Y-m"), $last_event_month->format("Y-m")]);
    }

    protected function getAdjacentDate($month, $previous = true){
        $query = DB::table('events');
        $date = Carbon::parse($month);

        if ($previous){;
            $query->whereDate('date', '<', $date->firstOfMonth()->format("Y-m-d"))->latest('date');
        } else {
            $query->whereDate('date', '>', $date->lastOfMonth()->format("Y-m-d"))->oldest('date');
        }

        $adjacentEvent = $query->take(1)->get();

        if (!$adjacentEvent->isEmpty()) {
            return Carbon::parse($adjacentEvent->first()->date);
        }

        return false;
    }


}
