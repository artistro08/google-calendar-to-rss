<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Spatie\GoogleCalendar\Event;

class CalendarRSSFeed extends Model implements Feedable
{
    protected $fillable = [
        'title',
        'description',
    ];

    public static $rules = [
        'title' => 'required',
        'description' => 'required',
    ];

    public function toFeedItem()
    {


        $events = Event::get();
        foreach ($events as $event) {
            return FeedItem::create([
                'id' => $this->id,
                'title' => $event->summary,
                'description' => $event->description,
                'updated' => $this->updated_at

            ]);
        }
    }

    public static function getFeedItems()
    {
        return CalendarRSSFeed::all();
    }
}
