<div id="facilities" class="p-10 pl-40 pr-40">
    <h2 class="text-6xl text-emerald-400 font-bold p-4">Udogodnienia</h2>
    <ul class="mt-10 flex gap-x-[64px] justify-between">
        @foreach($mainFacilities as $facility)
            <li>
                <p>{{$facility}}</p>
            </li>
        @endforeach
    </ul>
</div>
