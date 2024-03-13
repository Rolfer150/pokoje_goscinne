<x-layouts.app pageTitle="Strona główna">
    <div class="text-[#1e212b]">
        <div class="w-full h-screen">
            @include('main1')
        </div>
        <div class="w-full h-screen">
            @include('about1')
            @include('gallery1')
            @include('facilities1')
        </div>
    </div>
</x-layouts.app>
