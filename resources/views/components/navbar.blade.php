<nav class="flex justify-center items-center space-x-16 pt-10 pb-10 select-none">
    <x-items.nav-link title="Strona główna" linkUrl="{{route('home')}}" />
    <x-items.nav-link title="Pokoje" linkUrl="{{ route('rooms') }}" />
    <x-items.nav-link title="Cennik" linkUrl="{{ route('price_list') }}" />
    <x-items.nav-link title="Rezerwacja" linkUrl="{{ route('rental') }}"/>
    <x-items.nav-link title="Kontakt" linkUrl="{{ route('contact') }}" />
</nav>
