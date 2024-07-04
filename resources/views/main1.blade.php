<main class="flex justify-center text-[#1e212b] bg-no-repeat bg-cover" style="background-image: url({{ asset('img/panorama2.png') }})">
    <div class="flex flex-col space-y-10 p-6 select-none">
        <h1 class="text-6xl font-bold mt-[20vh]">Witamy na naszej stronie!</h1>
        <h2 class="text-3xl text-center">Sprawdź naszą ofertę</h2>
        <x-items.nav-link class="text-xl text-white text-center bg-emerald-400 place-self-center p-4 rounded-md" title="Cennik" linkUrl="{{ route('price_list') }}" />
    </div>
</main>
