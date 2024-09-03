@props([
    'id', 'name', 'type', 'placeholder' => '',
])
<div class="flex justify-center p-2 gap-x-4">
    <div>
        <label for="{{ $startDateName }}" class="required">Data rozpoczęcia pobytu</label>
        <input
            id="{{ $startDateName }}"
            name="{{ $startDateName }}"
            type="{{ $type }}"
            min="{{ $this->getMinStartDate() }}"
            max="{{ $this->getMaxStartDate() }}"
            placeholder="{{ $placeholder }}"
            wire:model.lazy="startDate"
            {{ $attributes->merge([
                'class' => 'p-2 rounded-md w-full bg-emerald-500',
            ]) }} />
        @if($errors->has($startDateName))
            <p class="text-sm text-red-500">{{ $errors->first($startDateName) }}</p>
        @endif
    </div>

    <div>
        <label for="{{ $endDateName }}" class="required">Data zakończenia pobytu</label>
        <input
            id="{{ $endDateName }}"
            name="{{ $endDateName }}"
            type="{{ $type }}"
            min="{{ $this->getMinEndDate() }}"
            max="{{ $this->getMaxEndDate() }}"
            placeholder="{{ $placeholder }}"
            wire:model.lazy="endDate"
            {{ $attributes->merge([
                'class' => 'p-2 rounded-md w-full bg-emerald-500',
            ]) }} />
        @if($errors->has($endDateName))
            <p class="text-sm text-red-500">{{ $errors->first($endDateName) }}</p>
        @endif
    </div>

</div>
