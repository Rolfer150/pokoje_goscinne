<button {{ $attributes->merge([
    'class' => 'text-md uppercase text-white bg-blue-400 place-self-center p-4 rounded-md',
    'type' => 'submit',
]) }}>
    {{ $slot }}
</button>
