@props([
    'id', 'name'
])

<select
    id="{{ $name }}"
    name="{{ $name }}"
    {{ $attributes->merge([
        'class' => 'p-4 max-w',
    ]) }}>
    {{ $slot }}
</select>
