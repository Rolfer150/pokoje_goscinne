<div class="flex flex-col justify-between gap-y-2">
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

    <x-forms.primary-button wire:click="$wire.submit" wire:confirm="Czy na pewno chcesz złożyć formularz kontaktowy?">Wyślij wiadomość</x-forms.primary-button>
</div>
