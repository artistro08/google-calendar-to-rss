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
        $startOfWeek = Carbon::now()->modify('this week');
        $endOfWeek = Carbon::now()->modify('this week +6 days');
        $events = Event::get($startOfWeek, $endOfWeek);
        return response()->view('index', ['events' => $events])->header('Content-Type', 'text/xml');
    }
}
