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
        $startOfWeek = Carbon::now()->modify('today');
        $endOfWeek = Carbon::now()->modify('today +365 days');
        $events = Event::get();
        return response()
            ->view('index', ['events' => $events])
            ->header('Content-Type', 'application/xml');
    }
}
