@props([
    'id', 'name'
])

<select
    id="{{ $name }}"
    name="{{ $name }}"
    {{ $attributes->merge([
        'class' => 'p-4 max-w-2xl',
    ]) }}>
    {{ $slot }}
</select>
