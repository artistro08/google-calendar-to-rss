<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;

class CalendarRSSController extends Controller
{
    public function getIndex()
    {
        $events = Event::get();
        return view('index', ['events' => $events]);
    }
}
