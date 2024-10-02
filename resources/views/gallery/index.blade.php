<x-layouts.app page-title="Galeria">
    <x-header title="Galeria" />

    <div class="container mx-auto">
        <section class="my-10 gap-2">
{{--            @foreach($photos as $photo)--}}
{{--                <img class="md:h-80 rounded-md" src="{{$photo->getURLImage()}}" alt="" />--}}
{{--            @endforeach--}}
            <livewire:image-modal :photos="$photos" />
        </section>
    </div>
</x-layouts.app>
