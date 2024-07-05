<x-layouts.app pageTitle="Rezerwacja">
    <x-header title="Rezerwacja" />
    <div class="ml-4 mr-4 mt-10 mb-10 sm:ml-8 sm:mr-8 sm:mt-14 sm:mb-14 lg:ml-36 lg:mr-36 lg:mt-20 lg:mb-20">
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

            <label for="phone_number">Numer telefonu</label>
            <x-items.input-text
                type="tel"
                name="phone_number"
                placeholder="Wprowadź swój numer telefonu..." />
            {{--            pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" />--}}

            <label for="people_amount">Ilość gości</label>
            <x-items.input-text
                type="number"
                name="people_amount"
                min="1"
                max="4"
                placeholder="Ilość gości..." />

            <livewire:data-picker />

            <label for="room_id">Pokoje</label>
            <x-items.select name="room_id">
                <option selected>Wybierz pokój</option>
                @foreach($roomsQuery as $room)
                    <option name="room" value="{{ $room->id }}">{{ $room->name }}</option>
                @endforeach
            </x-items.select>

            <select class="bg-no-repeat overscroll-none">
                <option>ww</option>
            </select>

            <label for="comments">Zapytania/uwagi</label>
            <x-items.textarea name="comments" placeholder="Wprowadź swoje zapytania/uwagi..."></x-items.textarea>

            <x-forms.primary-button>Wyślij rezerwację</x-forms.primary-button>
        </form>
    </div>
</x-layouts.app>
