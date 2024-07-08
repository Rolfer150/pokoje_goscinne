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
    'class' => 'p-2 mb-4 rounded-md',
]) }} >{{ $slot }}</textarea>
