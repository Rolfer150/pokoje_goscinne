<div class="mt-5 mb-5">
    <details class="dark:open:bg-slate-900 open:ring-1 open:ring-black/5 dark:open:ring-white/10
                        open:shadow-lg rounded-lg cursor-pointer">
        <summary class="text-xl p-6 text-gray-700 hover:text-gray-400 duration-200">{{ $room->name }}</summary>
        <div class="border-t-2 text-lg p-6">
            <p>{{ $room->description }}</p>
            <p>{{ $room->price }}</p>
            <p>{{ $room->accommodation_number }}</p>
            @foreach($room->getFacilities($room->id) as $facility)
                <p>{{ $facility }}</p>
            @endforeach
            <div class="mt-8 flex flex-wrap gap-2 justify-center">
                @foreach($room->image_path as $image)
                    @if($image)
                        <img class="w-[350px] sm:w-[30vw] md:w-[20vw] opacity-100 transition duration-300 hover:opacity-50" alt="" src="{{ '/storage/' . $image }}" />
                    @endif
                @endforeach
            </div>

        </div>
    </details>
</div>
