@props([
     'id', 'name', 'type', 'placeholder' => '', 'min' => ''
])

<input
    id="{{ $name }}"
    name="{{ $name }}"
    type="{{ $type }}"
    min="{{ $min }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge([
        'class' => 'p-4 rounded-sm mb-10 max-w',
    ]) }} />
