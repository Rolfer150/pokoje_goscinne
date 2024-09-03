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
    'class' => 'p-2 rounded-md text-gray-700 border-2 focus:outline-emerald-600',
]) }} >{{ $slot }}</textarea>

@if($errors->has($name))
    <p class="text-sm text-red-500">{{ $errors->first($name) }}</p>
@endif
