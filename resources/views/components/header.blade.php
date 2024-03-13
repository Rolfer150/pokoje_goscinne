<h2 {{ $attributes->merge([
    'class' => 'text-6xl text-emerald-400 font-bold p-10 pl-40 p-4'
]) }}>
    {{$title}}
</h2>

{{ $slot }}
