<x-layouts.app pageTitle="Pokoje">
    <div>
        <x-header title="Pokoje" />
        <ul>
            @foreach($roomsQuery as $room)
                <li>
                    <p>{{$room}}</p>
                </li>
            @endforeach
        </ul>
    </div>
</x-layouts.app>
