<x-layouts.app pageTitle="Rezerwacja">
    <x-header title="Rezerwacja" />
    <div class="xs:pl-4 xs:pr-4 sm:pl-8 sm:pr-8 md:ml-20 md:mr-20 lg:ml-40 lg:mr-40 mt-10">
        <form method="POST" action="{{ route('rental.store') }}" class="flex flex-col justify-between gap-y-2">
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
                placeholder="Wprowadź swój numer telefonu..." />
            {{--            pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" />--}}

            <label for="people_amount">Ilość gości</label>
            <x-items.input-text
                type="number"
                name="people_amount"
                min="1"
                placeholder="Ilość gości..." />

            <livewire:data-picker />

            {{--        <label for="rooms">Pokoje</label>--}}
            {{--        <x-items.select name="rooms">--}}
            {{--            @foreach($roomsQuery as $room)--}}
            {{--                <option name="{{ $room->id }}" value="{{ $room->id }}">{{ $room->name }}</option>--}}
            {{--            @endforeach--}}
            {{--        </x-items.select>--}}
            <label for="comments">Zapytania/uwagi</label>
            <x-items.textarea name="comments" placeholder="Wprowadź swoje zapytania/uwagi..."></x-items.textarea>

            <x-forms.primary-button>Wyślij rezerwację</x-forms.primary-button>
        </form>
    </div>
</x-layouts.app>
