<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;

class CalendarRSSController extends Controller
{
    public function getIndex()
    {
        $sevenDaysAhead = Carbon::now()->addDays(7);
        $events = Event::get(Carbon::now(), Carbon::now()->addDays(7));
        dd($events);
        return response()->view('index', ['events' => $events])->header('Content-Type', 'text/xml');
    }
}
