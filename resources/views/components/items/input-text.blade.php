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
        'class' => 'p-2 rounded-md mb-4 text-gray-700 bg-slate-100 placeholder:text-gray-400',
    ]) }} />
