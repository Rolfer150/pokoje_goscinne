<div class="sticky top-0 z-50 shadow-sm">
    <nav class=" bg-white w-full">
        <div class="hidden sm:block sm:flex justify-end mr-4 lg:mr-0 lg:justify-center gap-x-6 md:gap-x-10 lg:gap-x-14 p-5">
            <a href="{{ route('home') }}">
                <x-filament-panels::logo class="fixed left-0 ml-6"/>
            </a>
            <a href="{{ route('home') }}">
                <span class="transition text-gray-700 hover:text-gray-400 duration-200 {{Request::is('/') ? "text-emerald-300" : ""}}">Strona główna</span>
            </a>
            <x-items.nav-link title="Pokoje" linkUrl="{{ route('rooms') }}" />
            {{--    <x-items.nav-link title="Galeria" linkUrl="{{ route('gallery') }}" />--}}
            <x-items.nav-link title="Cennik" linkUrl="{{ route('price_list') }}" />
            <x-items.nav-link title="Rezerwacja" linkUrl="{{ route('rental') }}"/>
            <x-items.nav-link title="Kontakt" linkUrl="{{ route('message') }}" />
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
            <div class="flex flex-col gap-y-8 p-8 bg-white text-center w-full {{$this->isVisible ? "absolute z-51 translate-y-0" : "hidden -translate-y-5"}} transition ease-in-out duration-100">
                <x-items.nav-link title="Strona główna" linkUrl="{{route('home')}}" />
                <x-items.nav-link title="Pokoje" linkUrl="{{ route('rooms') }}" />
                {{--    <x-items.nav-link title="Galeria" linkUrl="{{ route('gallery') }}" />--}}
                <x-items.nav-link title="Cennik" linkUrl="{{ route('price_list') }}" />
                <x-items.nav-link title="Rezerwacja" linkUrl="{{ route('rental') }}"/>
                <x-items.nav-link title="Kontakt" linkUrl="{{ route('message') }}" />
            </div>
        </div>
    </nav>
</div>
