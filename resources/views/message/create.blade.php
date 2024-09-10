<x-layouts.app pageTitle="Kontakt">

    {{--  Tytuł strony  --}}
    <x-header title="Kontakt" />

    <div class="container mx-auto">
        @if(session('error'))
            <div class="bg-red-400 p-4 mb-6 mx-6 rounded-md">
                <h4 class="text-white text-lg text-center lg:text-left">{{ session('error') }}</h4>
            </div>
        @elseif (session('success'))
            <div class="bg-emerald-400 p-4 mb-6 mx-6 rounded-md">
                <h4 class="text-white text-lg text-center lg:text-left">{{ session('success') }}</h4>
            </div>
        @endif
        <h2 class="text-xl text-center">Skontaktuj się z nami po przez numer telefonu/adres e-mail podany poniżej</h2>

        {{--  Panel z danymi kontaktowymi  --}}
        <x-layouts.message.contact-panel />

        <h2 class="text-xl mb-6 text-center">lub wypełnij poniższy formularz kontaktowy</h2>

        {{--  Kontent  --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 align-middle p-4">

            {{--  Formularz kontaktowy  --}}
            <div class="p-4 my-6 border-2 shadow-md rounded-md">
                <form method="POST" action="{{ route('message.store') }}">
                    @csrf
                    <livewire:message-form />
                </form>
                <p class="required_field mt-2 ml-6 lg:ml-12"> - Pole jest wymagane do wypełnienia</p>
                <p class="required_email_or_phone mt-2 ml-6 lg:ml-12"> - Pole "E-mail" lub "Numer telefonu" jest wymagane do wypełnienia</p>
            </div>

            {{--  Mapa  --}}
            <x-layouts.message.map />
        </div>
    </div>
</x-layouts.app>
