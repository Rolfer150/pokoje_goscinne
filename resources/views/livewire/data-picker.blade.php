@props([
    'id', 'name', 'type', 'placeholder' => '',
])
<div class="flex justify-center p-2 gap-x-4">
    <div class="">
        <label for="{{ $startDateName }}">Data rozpoczęcia pobytu</label>
        <input
            id="{{ $startDateName }}"
            name="{{ $startDateName }}"
            type="{{ $type }}"
            min="{{ $this->getMinStartDate() }}"
            max="{{ $this->getMaxStartDate() }}"
            placeholder="{{ $placeholder }}"
            wire:model.lazy="startDate"
            {{ $attributes->merge([
                'class' => 'p-2 rounded-md mb-10 w-full bg-slate-100 text-gray-400',
            ]) }} />
    </div>

    <div class="">
        <label for="{{ $endDateName }}">Data zakończenia pobytu</label>
        <input
            id="{{ $endDateName }}"
            name="{{ $endDateName }}"
            type="{{ $type }}"
            min="{{ $this->getMinEndDate() }}"
            placeholder="{{ $placeholder }}"
            wire:model.lazy="endDate"
            {{ $attributes->merge([
                'class' => 'p-2 rounded-md mb-10 w-full bg-slate-100 text-gray-400',
            ]) }} />
    </div>

</div>
