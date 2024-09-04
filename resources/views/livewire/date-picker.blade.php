@props([
    'name', 'type', 'placeholder' => '',
])
<div class="flex justify-center p-2 gap-x-4">
    <div>
        <label for="{{ $startDateName }}" class="required">Data rozpoczęcia pobytu</label>
        <x-items.date-picker
            name="{{ $startDateName }}"
            type="{{ $type }}"
            min="{{ $this->getMinStartDate() }}"
            max="{{ $this->getMaxStartDate() }}"
            placeholder="{{ $placeholder }}"
            wire:model.live="startDate"/>
    </div>

    <div>
        <label for="{{ $endDateName }}" class="required">Data zakończenia pobytu</label>
        <x-items.date-picker
            name="{{ $endDateName }}"
            type="{{ $type }}"
            min="{{ $this->getMinEndDate() }}"
            max="{{ $this->getMaxEndDate() }}"
            placeholder="{{ $placeholder }}"
            wire:model.live="endDate"/>
    </div>

</div>
