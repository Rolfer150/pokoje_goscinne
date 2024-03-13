<x-layouts.app pageTitle="Kontakt">
    <x-header title="Kontakt" />
    <form method="POST" action="{{ route('contact.store') }}" class="flex flex-col justify-between p-24">
        <x-items.input-text
            type="text"
            name="name"
            placeholder="Wprowadź swoje imię i nazwisko..." />

        <x-items.input-text
            type="email"
            name="email"
            placeholder="Wprowadź swój adres e-mail..." />

        <x-items.input-text
            type="tel"
            name="phone"
            placeholder="Wprowadź swój numer telefonu..."
            pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />

        <x-items.input-text
            type="number"
            name="people_amount"
            placeholder="Ilość gości..." />

        <x-forms.primary-button>Wyślij rezerwację</x-forms.primary-button>
    </form>
</x-layouts.app>
