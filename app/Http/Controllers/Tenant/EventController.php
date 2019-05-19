<?php

namespace App\Http\Controllers\Tenant;

use App\Event;
use App\EventList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function index(EventList $eventList)
    {
        $events = Event::all();

        return view('site.events', [
            'events' => $events,
            'eventList' => $eventList,
        ]);
    }

    public function show(EventList $eventList, Event $event)
    {
        return view('site.event', [
            'event' => $event,
            'eventList' => $eventList,
        ]);
    }
}
