<x-layouts.app pageTitle="Rezerwacja">
    <x-header title="Rezerwacja" />
    <form method="POST" action="{{ route('rental.store') }}" class="flex flex-col justify-between gap-y-2 sm:p-10 md:p-24 bg-red-200">
        @csrf
        <x-items.input-text
            type="text"
            class="border-slate-200 placeholder-slate-400 contrast-more:border-slate-400 contrast-more:placeholder-slate-500"
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
            pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" />

        <x-items.input-text
            type="number"
            name="people_amount"
            placeholder="Ilość gości..." />

        <x-items.select name="rooms">
            @foreach($roomsQuery as $room)
                <option value="{{ $room }}">{{ $room }}</option>
            @endforeach
        </x-items.select>
        <x-items.textarea name="comments" placeholder="Wprowadź swoje zapytania/uwagi..."></x-items.textarea>

        <x-forms.primary-button>Wyślij rezerwację</x-forms.primary-button>
    </form>
</x-layouts.app>
