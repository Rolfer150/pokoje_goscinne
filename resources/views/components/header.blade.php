<h2 {{ $attributes->merge([
    'class' => 'text-6xl text-emerald-400 font-bold p-16 sm:text-center md:text-left md:pl-20 lg:pl-64 p-4'
]) }}>
    {{$title}}
</h2>

{{ $slot }}
