{{-- bg-[#1e212b] --}}

<div class="pt-10 pb-4 select-none">
    {{--    <h1 class="ml-20">POKOJE ZŁYDASZYK</h1>--}}
    <nav class="flex justify-center items-center space-x-16">
        <x-items.nav-link title="Strona główna" linkUrl="{{route('home')}}" />
        <x-items.nav-link title="Pokoje" linkUrl="#" />
        <x-items.nav-link title="Cennik" linkUrl="#" />
        <x-items.nav-link title="Zarezerwuj pokój" linkUrl="{{ route('rooms') }}"/>
        <x-items.nav-link title="Kontakt" linkUrl="{{ route('contact') }}" />
    </nav>

    {{-- <img src="{{ asset('img/gora-rozciagniete.jpg') }}" alt="obraz" class="absolute w-full h-screen"> --}}
</div>
