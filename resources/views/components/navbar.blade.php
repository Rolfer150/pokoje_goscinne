<nav class="flex justify-center items-center space-x-16 pt-6 pb-6 select-none bg-white shadow-sm">
    <x-items.nav-link title="Strona główna" linkUrl="{{route('home')}}" />
    <x-items.nav-link title="Pokoje" linkUrl="{{ route('rooms') }}" />
{{--    <x-items.nav-link title="Galeria" linkUrl="{{ route('gallery') }}" />--}}
    <x-items.nav-link title="Cennik" linkUrl="{{ route('price_list') }}" />
    <x-items.nav-link title="Rezerwacja" linkUrl="{{ route('rental') }}"/>
    <x-items.nav-link title="Kontakt" linkUrl="{{ route('contact') }}" />
</nav>
