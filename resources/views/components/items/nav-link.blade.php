@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-emerald-500 font-bold hover:text-emerald-300 duration-150 ease-in-out'
                : 'text-gray-800 font-bold hover:text-gray-400 duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
