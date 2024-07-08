@props([
    'id', 'name'
])

<select
    id="{{ $name }}"
    name="{{ $name }}"
    {{ $attributes->merge([
        'class' => 'p-2 rounded-md mb-4 bg-slate-100 text-gray-400 bg-no-repeat text-right',
    ]) }}>
    {{ $slot }}
</select>
