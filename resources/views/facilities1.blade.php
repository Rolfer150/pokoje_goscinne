<div id="facilities" class="bg-blue-400 text-white p-10 pl-40 pr-40">
    <h2 class="text-6xl font-bold p-4">Udogodnienia</h2>
    <ul class="mt-10">
        @foreach($mainFacilities as $facility)
            <li>
                <p>{{$facility}}</p>
            </li>
        @endforeach
    </ul>
</div>
