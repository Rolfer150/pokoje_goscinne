@props([
    'id', 'name'
])

<select
    id="{{ $name }}"
    name="{{ $name }}"
    {{ $attributes->merge([
        'class' => 'p-2 rounded-md mb-4 text-gray-700 border-2 focus:outline-emerald-600 bg-no-repeat text-right',
    ]) }}>
    {{ $slot }}
    @if($errors->has($name))
        <p class="text-sm text-red-500">{{ $errors->first($name) }}</p>
    @endif
</select>
