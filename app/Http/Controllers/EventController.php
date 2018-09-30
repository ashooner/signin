<?php
namespace App\Http\Controllers;

use DB;
use App\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{

    public function redirect(){
        $thisMonth = date('Y-m');
        return redirect()->route('events',['month'=>$thisMonth]);
    }

    public function index($month)
    {
        $date = Carbon::parse($month);
        $monthName = $date->format('F');
        $year = $date->format('Y');
        $firstDate = $date->firstOfMonth()->format("Y-m-d");
        $lastDate = $date->lastOfMonth()->format("Y-m-d");

        $events = Event::whereBetween('date', [$firstDate, $lastDate])->withCount('attendees')->get();

        $todaysEvents = $events->where('date', date('Y-m-d'));

        return view(
            'events.index',
            [
                'monthName'=>$monthName,
                'year'=>$year,
                'month'=>$month,
                'nextMonth'=> $this->getAdjacentDate($month, false),
                'previousMonth'=>$this->getAdjacentDate($month),
                'todaysEvents' => $todaysEvents,
                'events'=>$events
            ]

        );
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