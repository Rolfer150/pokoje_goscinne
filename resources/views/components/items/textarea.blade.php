@props([
    'name', 'rows' => 3, 'cols' => 30, 'placeholder' => ''
])

<textarea
    id="{{ $name }}"
    name="{{ $name }}"
    rows="{{ $rows }}"
    cols="{{ $cols }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge([
    'class' => 'p-4 mb-10 rounded-sm border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50',
]) }} >{{ $slot }}</textarea>
