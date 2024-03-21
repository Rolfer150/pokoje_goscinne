<x-layouts.app pageTitle="Pokoje">
    <x-header title="Pokoje"/>

    <div class="ml-40 mr-40 mt-10">
        <p class="">
            Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz
            pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później
            zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach
            60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym
            różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus
            PageMaker
        </p>

        <div class="mt-10">
            @foreach($roomsQuery as $room)
                <div class="mt-5 mb-5">
                    <details class="open:bg-white dark:open:bg-slate-900 open:ring-1 open:ring-black/5 dark:open:ring-white/10
                        open:shadow-lg p-6 rounded-lg">
                        <summary class="transition">{{ $room->name }}</summary>
                        <div>
                            <p>{{ $room->description }}</p>
                            <p>{{ $room->price }}</p>
                            <p>{{ $room->accommodation_number }}</p>
                            @foreach($room->getFacilities($room->id) as $facility)
                                <p>{{ $facility }}</p>
                            @endforeach
                            @foreach($room->image_path as $image)
                                @if($image)
                                    <img src="{{ '/storage/' . $image }}" />
                                @endif
                            @endforeach
                        </div>
                    </details>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
