<x-layouts.app pageTitle="Pokoje">
    <div>
        <ul>
            @foreach($roomsQuery as $room)
                <li>
                    <p>{{$room}}</p>
                </li>
            @endforeach
        </ul>
    </div>
</x-layouts.app>
