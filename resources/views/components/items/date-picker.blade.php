@props([
    'name', 'type', 'min', 'max', 'placeholder'
])

<input
    id="{{ $name }}"
    name="{{ $name }}"
    type="{{ $type }}"
    min="{{ $min }}"
    max="{{ $max }}"
    placeholder="{{ $placeholder }}"
{{ $attributes->merge([
    'class' => 'p-2 rounded-md w-full bg-emerald-500',
]) }} />
@if($errors->has($name))
    <p class="text-sm text-red-500">{{ $errors->first($name) }}</p>
@endif
