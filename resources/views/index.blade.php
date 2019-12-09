<feed xmlns="http://www.w3.org/2005/Atom">

    <title>CCN Featured RSS Feed</title>
    <link href="https://ccnicr.com/" />
    <author>
        <name>Corridor Connection Network</name>
    </author>
    <id>11245566856655</id>
    @foreach ($events as $event)
        <entry>
            <title>{{ $event->summary }}</title>
            <id>{{ $event->id }}</id>
            <updated>{{ $event->startDateTime->format('M d') }}</updated>
            <summary>{{ $event->startDateTime->format('g:i A') }}</summary>
            <content>{{ $event->description }}</content>
        </entry>
    @endforeach
</feed>

