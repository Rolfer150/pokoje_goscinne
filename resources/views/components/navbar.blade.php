<nav class="flex justify-center items-center p-6 select-none bg-white shadow-sm">
    <div class="hidden md:block md:w-full">
        <div class="flex gap-8">
            <x-items.nav-link title="Strona główna" linkUrl="{{route('home')}}" />
            <x-items.nav-link title="Pokoje" linkUrl="{{ route('rooms') }}" />
            {{--    <x-items.nav-link title="Galeria" linkUrl="{{ route('gallery') }}" />--}}
            <x-items.nav-link title="Cennik" linkUrl="{{ route('price_list') }}" />
            <x-items.nav-link title="Rezerwacja" linkUrl="{{ route('rental') }}"/>
            <x-items.nav-link title="Kontakt" linkUrl="{{ route('message') }}" />
        </div>
    </div>

    <div class="md:hidden text-gray-700">
        <div class="flex gap-6">
            <h2>Menu</h2>
            <button class="hover:text-gray-500 duration-200">
                <x-items.navbar-icon />
            </button>
        </div>
        <div class="flex flex-col mt-4 space-y-6">
            <x-items.nav-link title="Strona główna" linkUrl="{{route('home')}}" />
            <x-items.nav-link title="Pokoje" linkUrl="{{ route('rooms') }}" />
            {{--    <x-items.nav-link title="Galeria" linkUrl="{{ route('gallery') }}" />--}}
            <x-items.nav-link title="Cennik" linkUrl="{{ route('price_list') }}" />
            <x-items.nav-link title="Rezerwacja" linkUrl="{{ route('rental') }}"/>
            <x-items.nav-link title="Kontakt" linkUrl="{{ route('message') }}" />
        </div>

    </div>
</nav>
