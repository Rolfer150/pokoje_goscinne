@props([
    'id', 'name', 'type', 'placeholder' => '',
])
<div class="flex justify-center">
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
                'class' => 'p-4 rounded-sm mb-10 max-w-2xl',
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
                'class' => 'p-4 rounded-sm mb-10 max-w-2xl',
            ]) }} />
    </div>

</div>
