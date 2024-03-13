@props([
    'type', 'name', 'placeholder' => ''
])

<input
    id="{{ $name }}"
    name="{{ $name }}"
    type="{{ $type }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge([
        'class' => 'p-4 rounded-sm mb-10 max-w-2xl',
    ]) }} />
