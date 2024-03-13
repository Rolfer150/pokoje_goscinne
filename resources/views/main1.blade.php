<main class="bg-no-repeat bg-top bg-cover flex justify-center text-[#1e212b]" style="background-image: url({{ asset('img/panorama.jpg') }})">
    <div class="flex flex-col space-y-10 p-6 select-none">
        <h1 class="text-6xl font-bold mt-[20vh]">Witamy na naszej stronie!</h1>
        <h2 class="text-3xl text-center">Sprawdź naszą ofertę</h2>
        <x-items.nav-link class="text-xl text-white bg-blue-400 place-self-center p-4 rounded-md" title="Cennik" linkUrl="{{ route('price_list') }}" />
    </div>
</main>
