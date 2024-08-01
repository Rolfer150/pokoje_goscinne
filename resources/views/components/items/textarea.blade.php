@props([
    'name', 'rows' => 5, 'cols' => 30, 'placeholder' => ''
])

<textarea
    id="{{ $name }}"
    name="{{ $name }}"
    rows="{{ $rows }}"
    cols="{{ $cols }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge([
    'class' => 'p-2 rounded-md mb-4 text-gray-700 bg-slate-100',
]) }} >{{ $slot }}</textarea>
