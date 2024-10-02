<div class="flex flex-wrap justify-center gap-2 w-full">
    @foreach($photos as $key => $value)
        <div class="overflow-hidden w-full sm:w-1/2 md:w-1/3 lg:w-1/4">
            <img
                wire:click="openModal({{ $key }})"
                wire:keydown.escape="closeModal"
                class="opacity-100 transition cursor-pointer duration-300 hover:opacity-80 hover:scale-110"
                alt=""
                src="{{$value->getURLImage()}}"/>
        </div>
    @endforeach

    @if($this->isOpened))
        <div class="fixed top-0 z-50 left-0 inset-x-0 w-full h-screen mx-auto bg-[rgba(0,0,0,0.9)]"
             wire:keydown.escape.window="closeModal" wire:transition>
            <button wire:click="closeModal"
                    class="relative z-50 left-5 top-5 bg-[#1e212b] text-emerald-500 hover:bg-white p-2 rounded-md border-2 border-emerald-500 duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>
            </button>
            <div class="flex items-center justify-center text-white gap-x-8">
                @if(count($photos) !== 1)
                    <button
                        wire:keydown.left.window="previousImage"
                        wire:click="previousImage"
                        wire:transition
                        class="text-emerald-500 bg-[#1e212b] py-2 px-4 rounded-md hover:bg-white border-2 border-emerald-500 duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"/>
                        </svg>
                    </button>
                @endif
                <div>
                    <img src="{{ $photos[$this->imageKey]->getURLImage() }}"
                         class="relative z-55 top-10 lg:top-0 left-0 mx-auto max-w-[90vw] max-h-[90vh]"/>
                </div>
                @if(count($photos) !== 1)
                    <button
                        wire:keydown.right.window="nextImage"
                        wire:click="nextImage"
                        wire:transition
                        class="text-emerald-500 bg-[#1e212b] py-2 px-4 rounded-md hover:bg-white border-2 border-emerald-500 duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"/>
                        </svg>
                    </button>
                @endif
            </div>
        </div>
    @endif
</div>
