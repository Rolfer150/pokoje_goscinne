@props([
    'name', 'type', 'placeholder' => '',
])
<div class="space-y-4 p-2">
    <div class="space-y-2">
        <label for="{{ $startDateName }}" class="required_field">Data rozpoczęcia pobytu</label>
        <x-items.date-picker
            name="{{ $startDateName }}"
            type="{{ $type }}"
            min="{{ $this->getMinStartDate() }}"
            max="{{ $this->getMaxStartDate() }}"
            placeholder="{{ $placeholder }}"
            wire:model.live="startDate"/>
    </div>

    <div class="space-y-2">
        <label for="{{ $endDateName }}" class="required_field">Data zakończenia pobytu</label>
        <x-items.date-picker
            name="{{ $endDateName }}"
            type="{{ $type }}"
            min="{{ $this->getMinEndDate() }}"
            max="{{ $this->getMaxEndDate() }}"
            placeholder="{{ $placeholder }}"
            wire:model.live="endDate"/>
    </div>

</div>
