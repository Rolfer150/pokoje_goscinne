<div class="sticky top-0 z-50">
    <nav class=" bg-white w-full">
        <div class="hidden sm:block sm:flex sm:justify-center gap-10 p-4">
            <a href="{{ route('home') }}">
                <span class="transition text-gray-700 hover:text-gray-400 duration-200 {{Request::is('/') ? "text-emerald-300" : ""}}">Strona główna</span>
            </a>
            <x-items.nav-link title="Pokoje" linkUrl="{{ route('rooms') }}" />
            {{--    <x-items.nav-link title="Galeria" linkUrl="{{ route('gallery') }}" />--}}
            <x-items.nav-link title="Cennik" linkUrl="{{ route('price_list') }}" />
            <x-items.nav-link title="Rezerwacja" linkUrl="{{ route('rental') }}"/>
            <x-items.nav-link title="Kontakt" linkUrl="{{ route('contact') }}" />
        </div>

        <div class="sm:hidden">
            <div class="flex gap-8 p-4 justify-center">
                <h2>Menu</h2>
                <button wire:click="hideShow" class="hover:text-gray-500 duration-200">
                    @if(!$this->isVisible)
                        <x-items.bars-icon />
                    @else
                        <x-items.close-icon />
                    @endif
                </button>
            </div>
            <div class="flex flex-col gap-y-8 p-8 bg-white text-center h-screen {{$this->isVisible ? "translate-y-0 overscroll-none" : "hidden -translate-y-8"}}">
                <x-items.nav-link title="Strona główna" linkUrl="{{route('home')}}" />
                <x-items.nav-link title="Pokoje" linkUrl="{{ route('rooms') }}" />
                {{--    <x-items.nav-link title="Galeria" linkUrl="{{ route('gallery') }}" />--}}
                <x-items.nav-link title="Cennik" linkUrl="{{ route('price_list') }}" />
                <x-items.nav-link title="Rezerwacja" linkUrl="{{ route('rental') }}"/>
                <x-items.nav-link title="Kontakt" linkUrl="{{ route('contact') }}" />
            </div>

        </div>
    </nav>
</div>
