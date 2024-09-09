@props([
     'name', 'type', 'placeholder' => '', 'min' => '', 'required' => false
])

<input
    id="{{ $name }}"
    name="{{ $name }}"
    type="{{ $type }}"
    min="{{ $min }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge([
        'class' => 'p-2 rounded-md border-2 text-gray-700 focus:outline-emerald-600 placeholder:text-gray-400',
    ]) }}
    @if($required) required @endif
/>
@if($errors->has($name))
    <p class="text-sm text-red-500">{{ $errors->first($name) }}</p>
@endif
