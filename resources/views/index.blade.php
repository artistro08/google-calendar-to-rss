<feed xmlns="http://www.w3.org/2005/Atom">
    <title>CCN Featured RSS Feed</title>
    <link href="{{ url('/') }}/"/>
    <id>{{ url('/') }}/</id>
    <updated>{{ Carbon\Carbon::now()->format("Y-m-d\TH:i:sP") }}</updated>
    @foreach ($events as $event)
        <entry>
            <title>{{ $event->summary }}</title>
            {{-- AUTHORS. Generated by Author Email --}}
            @if($event->creator->email == 'rina@rinajensen.com')
                <author>
                    <name>{{ 'Rina Jensen' }}</name>
                </author>
            @elseif($event->creator->email == 'mstonekinghome@gmail.com')
                <author>
                    <name>{{ 'Matthew Stoneking' }}</name>
                </author>
            @elseif($event->creator->email == 'artistro08@gmail.com')
                <author>
                    <name>{{ 'Devin Green' }}</name>
                </author>
            @elseif($event->creator->email == 'wesley.adams.davis@gmail.com')
                <author>
                    <name>{{ 'Wesley Davis' }}</name>
                </author>
            @else
                <author>
                    <name>{{ 'Corridor Connection Network' }}</name>
                </author>
            @endif
            <id>{{ $event->htmlLink }}</id>
            {{-- CATEGORIES: Based on the Google Calendar Color ID Naming Convention --}}
            @if($event->colorId == 1)
                <category term="lavender" label="Lavender"></category>
            @elseif($event->colorId == 2)
                <category term="sage" label="Sage"></category>
            @elseif($event->colorId == 3)
                <category term="grape" label="Grape"></category>
            @elseif($event->colorId == 4)
                <category term="flamingo" label="Flamingo"></category>
            @elseif($event->colorId == 5)
                <category term="banana" label="Banana"></category>
            @elseif($event->colorId == 6)
                <category term="tangerine" label="Tangerine"></category>
            @elseif($event->colorId == 7)
                <category term="peacock" label="Peacock"></category>
            @elseif($event->colorId == 8)
                <category term="graphite" label="Graphite"></category>
            @elseif($event->colorId == 9)
                <category term="blueberry" label="Blueberry"></category>
            @elseif($event->colorId == 10)
                <category term="basil" label="Basil"></category>
            @elseif($event->colorId == 11)
                <category term="tomato" label="Tomato"></category>
            @else
                <category term="uncategorized" label="Uncategorized"></category>
            @endif
            <published>{{ date("Y-m-d\TH:i:sP", strtotime($event->created)) }}</published>
            <updated>{{ date("Y-m-d\TH:i:sP", strtotime($event->updated)) }}</updated>
            <summary>{{ $event->startDateTime->format('g:i A') }} - {{ $event->endDateTime->format('g:i A') }}</summary>
            <content type="html">
                {{ htmlspecialchars('<div id="timeOfEvent">'. $event->startDateTime->format('g:i A') .' - '. $event->endDateTime->format('g:i A') .'</div><br>', ENT_XML1, 'UTF-8')}}
{{ htmlspecialchars($event->description, ENT_XML1, 'UTF-8') }}
            </content>
        </entry>
    @endforeach
</feed>

