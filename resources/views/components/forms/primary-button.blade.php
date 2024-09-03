<button {{ $attributes->merge([
    'class' => 'text-md uppercase w-full text-white bg-emerald-500 place-self-center p-4 rounded-md',
    'type' => 'submit',
]) }}>
    {{ $slot }}
</button>
