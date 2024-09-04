<h2 {{ $attributes->merge([
    'class' => 'text-6xl text-emerald-400 lato-bold p-6 mb-6 text-center sm:text-left md:pl-20 lg:pl-64'
]) }}>
    {{$title}}
</h2>

{{ $slot }}
