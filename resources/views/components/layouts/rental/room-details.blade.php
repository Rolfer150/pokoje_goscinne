<div class="rounded-md p-2 shadow-md shadow-inner">
    <h4 class="lato-bold text-xl mb-2 ml-2">Informacje na temat wybranego pokoju</h4>
    <div class="flex space-x-4">
        <div class="w-1/2">
            @if($room->image_path)
{{--                @foreach($room->image_path as $image)--}}
{{--                    <img alt="{{ $room->slug . $image }}" src="{{ $room->getURLImages($image) }}" />--}}
{{--                @endforeach--}}
                <img alt="{{ $room->slug }}" src="{{ $room->getURLImages($room->image_path[0]) }}" />
            @endif
        </div>
        <div class="w-1/2">
            <div class="flex justify-between">
                <h5 class="lato-bold text-lg">{{ $room->name }}</h5>
                <h6 class="lato-regular-italic">Cena: {{ $room->getPrice() }}/doba</h6>
            </div>
            <div class="flex space-x-4">
                @foreach($room->roomFacilities as $facility)
                    <div class="text-xs bg-emerald-300/50 text-emerald-700 p-2 rounded-md max-w-fit"><p>{{ $facility->name }}</p></div>
                @endforeach
            </div>
            <p>Wielkość apartamentu: {{ $room->apartment_size }} m2</p>
            <div class="bg-[#1e212b] text-emerald-500 text-lg p-2 rounded-md max-w-fit space-y-4">
                <span class="flex flex-col md:flex-row">
                    <p>Data pobytu:&nbsp;</p>
                    <time class="lato-bold">{{ $start }}&nbsp;-&nbsp;{{ $end }}</time>
                </span>
                <span class="flex flex-col md:flex-row">
                    <p>Cena całkowita za pobyt:&nbsp;</p>
                    <span class="flex"><p class="lato-bold">{{ $sumPrice }}</p><p>&nbsp;({{ $dayLength }})</p></span>
                </span>
            </div>
        </div>
    </div>
</div>
