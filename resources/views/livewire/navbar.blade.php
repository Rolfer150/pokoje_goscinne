<div class="sticky top-0 z-50 shadow-sm">
    <nav class=" bg-white w-full">
        <div class="hidden sm:block sm:flex justify-end mr-4 lg:mr-0 lg:justify-center gap-x-6 md:gap-x-10 lg:gap-x-14 p-5">
            <a href="{{ route('home') }}">
                <x-filament-panels::logo class="fixed left-0 ml-6"/>
            </a>
            <x-items.nav-link :href="route('home')" :active="request()->routeIs('home')">Strona główna</x-items.nav-link>
            <x-items.nav-link :href="route('room.index')" :active="request()->routeIs('room.index')">Pokoje</x-items.nav-link>
            {{--    <x-items.nav-link title="Galeria" linkUrl="{{ route('gallery') }}" />--}}
            <x-items.nav-link :href="route('price_list')" :active="request()->routeIs('price_list')">Cennik</x-items.nav-link>
            <x-items.nav-link :href="route('rental.create')" :active="request()->routeIs('rental.create')">Rezerwacja</x-items.nav-link>
            <x-items.nav-link :href="route('message.create')" :active="request()->routeIs('message.create')">Kontakt</x-items.nav-link>
        </div>

        <div class="sm:hidden">
            <div class="flex gap-8 p-4 justify-center">
                <button wire:click="hideShow" class="hover:text-gray-500 duration-200">
                    @if(!$this->isVisible)
                        <x-items.bars-icon />
                    @else
                        <x-items.close-icon />
                    @endif
                </button>
                <x-filament-panels::logo />
            </div>
            <div class="flex flex-col gap-y-8 p-8 bg-white text-center w-full transition ease-in-out duration-100 {{$this->isVisible ? "absolute z-51 translate-y-0" : "hidden -translate-y-5"}}">
                <x-items.nav-link :href="route('home')" :active="request()->routeIs('home')">Strona główna</x-items.nav-link>
                <x-items.nav-link :href="route('room.index')" :active="request()->routeIs('room.index')">Pokoje</x-items.nav-link>
                {{--    <x-items.nav-link title="Galeria" linkUrl="{{ route('gallery') }}" />--}}
                <x-items.nav-link :href="route('price_list')" :active="request()->routeIs('price_list')">Cennik</x-items.nav-link>
                <x-items.nav-link :href="route('rental.create')" :active="request()->routeIs('rental.create')">Rezerwacja</x-items.nav-link>
                <x-items.nav-link :href="route('message.create')" :active="request()->routeIs('message.create')">Kontakt</x-items.nav-link>
            </div>
        </div>
    </nav>
</div>
