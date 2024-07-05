<x-layouts.app pageTitle="Kontakt">
    <x-header title="Kontakt" />
    <div class="ml-4 mr-4 mt-10 mb-10 sm:ml-8 sm:mr-8 sm:mt-14 sm:mb-14 lg:ml-36 lg:mr-36 lg:mt-20 lg:mb-20">
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
