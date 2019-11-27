<feed xmlns="http://www.w3.org/2005/Atom">

    <title>CCN Featured RSS Feed</title>
    <link href="https://ccnicr.com/" />
    <author>
        <name>Corridorn Connection Network</name>
    </author>
    <id>11245566856655</id>
    @foreach ($events as $event)
        <entry>
            <title>{{ $event->summary }}</title>
            <link href="{{ $event->url }}" />
            <id>{{ $event->id }}</id>
            <summary>{{ $event->startDate }} {{ $event->startDateTime }}</summary>
            <content>{{ $event->description }}</content>
        </entry>
    @endforeach
</feed>

