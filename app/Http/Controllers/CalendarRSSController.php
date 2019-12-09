<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\GoogleCalendar\Event;
use Carbon;

class CalendarRSSController extends Controller
{
    public function getIndex()
    {
        $events = Event::get();
        return response()->view('index', ['events' => $events])->header('Content-Type', 'text/xml');
    }
}
