<x-layouts.app pageTitle="Kontakt">
    <x-header title="Kontakt" />
    <div class="xs:pl-4 xs:pr-4 sm:pl-8 sm:pr-8 md:ml-20 md:mr-20 lg:ml-40 lg:mr-40 mt-10 mb-10">
        <form method="POST" action="{{ route('contact.store') }}" class="flex flex-col justify-between gap-y-2">
            @csrf

            <label for="name">Imię i nazwisko</label>
            <x-items.input-text
                type="text"
                name="name"
                placeholder="Wprowadź swoje imię i nazwisko..." />

            <label for="email">Adres e-mail</label>
            <x-items.input-text
                type="email"
                name="email"
                placeholder="Wprowadź swój adres e-mail..." />

            <label for="phone">Numer telefonu</label>
            <x-items.input-text
                type="tel"
                name="phone"
                placeholder="Wprowadź swój numer telefonu..."
                pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />

            <label for="message">Wiadomość</label>
            <x-items.textarea name="message"></x-items.textarea>

            <x-forms.primary-button>Wyślij rezerwację</x-forms.primary-button>
        </form>
    </div>
</x-layouts.app>
