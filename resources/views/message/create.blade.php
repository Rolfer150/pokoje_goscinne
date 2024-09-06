<x-layouts.app pageTitle="Kontakt">

    {{--  Tytuł strony  --}}
    <x-header title="Kontakt" />

    <div class="container mx-auto">

        <h2 class="text-xl text-center">Skontaktuj się z nami po przez numer telefonu/adres e-mail podany poniżej</h2>

        {{--  Panel z danymi kontaktowymi  --}}
        <x-layouts.message.contact-panel />

        <h2 class="text-xl mb-6 text-center">lub wypełnij poniższy formularz kontaktowy</h2>
        {{--  Kontent  --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 align-middle p-4">

            {{--  Formularz kontaktowy  --}}
            <div class="p-4 my-6 border-2 shadow-md rounded-md">
                <form method="POST" action="{{ route('message.store') }}" class="flex flex-col justify-between gap-y-2">
                    @csrf

                    <label for="name">Imię i nazwisko</label>
                    <x-items.input-text
                        type="text"
                        name="name"
                        placeholder="Wprowadź swoje imię i nazwisko..." />

                    <label for="email" class="required_email_or_phone">Adres e-mail</label>
                    <x-items.input-text
                        type="email"
                        name="email"
                        placeholder="Wprowadź swój adres e-mail..." />

                    <label for="phone_number" class="required_email_or_phone">Numer telefonu</label>
                    <x-items.input-text
                        type="tel"
                        name="phone_number"
                        placeholder="Wprowadź swój numer telefonu..." />

                    <h4 class="required">Wiadomość</h4>
                    <div class="flex flex-col gap-y-2 p-4 border-2 rounded-md shadow-sm">
                        <label for="topic" class="required_field">Temat</label>
                        <x-items.input-text
                            type="text"
                            name="topic"
                        />
                        <label for="content" class="required_field">Zawartość</label>
                        <x-items.textarea name="content"></x-items.textarea>
                    </div>

                    <x-forms.primary-button>Wyślij wiadomość</x-forms.primary-button>
                </form>
                <p class="required_field mt-2 ml-6 lg:ml-12"> - Pole jest wymagane do wypełnienia</p>
                <p class="required_email_or_phone mt-2 ml-6 lg:ml-12"> - Pole "E-mail" lub "Numer telefonu" jest wymagane do wypełnienia</p>
            </div>

            {{--  Mapa  --}}
            <x-layouts.message.map />
        </div>
    </div>
</x-layouts.app>
