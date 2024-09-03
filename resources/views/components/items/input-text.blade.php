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
        'class' => 'p-2 rounded-md text-gray-700 border-2 focus:outline-emerald-600 placeholder:text-gray-400',
    ]) }} />
@if($errors->has($name))
    <p class="text-sm text-red-500">{{ $errors->first($name) }}</p>
@endif
