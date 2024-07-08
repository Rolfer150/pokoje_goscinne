<x-layouts.app pageTitle="Pokoje">
    <x-header title="Pokoje"/>

    <div class="ml-4 mr-4 mt-10 mb-10 sm:ml-8 sm:mr-8 lg:ml-36 lg:mr-36">
        <div class="flex gap-x-6">
            <h3 class="text-center text-lg sm:text-justify">
                Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym. Został po raz
                pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później
                zaczął być używany przemyśle elektronicznym, pozostając praktycznie niezmienionym. Spopularyzował się w latach
                60. XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum, a ostatnio z zawierającym
                różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do realizacji druków na komputerach osobistych, jak Aldus
                PageMaker.
            </h3>
            <img src="{{ asset('img/room1.jpg') }}" class="w-[40vw] rounded-md" />
        </div>

        <div class="mt-10">
            @foreach($roomsQuery as $room)
                <livewire:detail-panel :room="$room" />
            @endforeach
        </div>
    </div>
</x-layouts.app>
