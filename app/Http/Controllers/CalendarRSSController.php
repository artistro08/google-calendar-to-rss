<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;

class CalendarRSSController extends Controller
{
    public function getIndex()
    {
        $events = Event::get();

        return response()->view('index', ['events' => $events])->header('Content-Type', 'text/xml');
    }
}
