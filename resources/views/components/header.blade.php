<h2 {{ $attributes->merge([
    'class' => 'text-6xl text-emerald-400 lato-black p-6 mb-6 text-center sm:text-left md:pl-16 lg:pl-32'
]) }}>
    {{$title}}
</h2>

{{ $slot }}
