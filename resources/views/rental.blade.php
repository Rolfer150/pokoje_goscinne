<x-layouts.app pageTitle="Rezerwacja">
    <x-header title="Rezerwacja" />
    <div class="mt-10 mb-10 sm:ml-8 sm:mr-8 lg:ml-36 lg:mr-36">

        <h3 class="text-center text-lg sm:text-justify ml-4 mr-4 mb-5">
            Możesz dokonać rezerwacji pokoju wysyłając do nas poniższy, uzupełniony formularz zgłoszeniowy. <br>
            Wiadomość o akceptacji zostanie wysłana w formie e-mail lub SMS.
        </h3>

        <div class="bg-white sm:rounded-md p-2 md:p-6">
            <form method="POST" action="{{ route('rental.store') }}">
                @csrf
                <div class="md:grid md:grid-cols-2">
                    <div class="flex flex-col p-2">
                        <label for="name">Imię i nazwisko</label>
                        <x-items.input-text
                            type="text"
                            name="name"
                            placeholder="Wprowadź swoje imię i nazwisko..." />
                    </div>

                    <div class="flex flex-col p-2">
                        <label for="email">Adres e-mail</label>
                        <x-items.input-text
                            type="email"
                            name="email"
                            placeholder="Wprowadź swój adres e-mail..." />
                    </div>

                    <div class="flex flex-col p-2">
                        <label for="phone_number">Numer telefonu</label>
                        <x-items.input-text
                            type="tel"
                            name="phone_number"
                            placeholder="Wprowadź swój numer telefonu..." />
                        {{--            pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" />--}}
                    </div>

                    <div class="flex flex-col p-2">
                        <label for="people_amount">Ilość gości</label>
                        <x-items.input-text
                            type="number"
                            name="people_amount"
                            min="1"
                            max="4"
                            placeholder="Ilość gości..." />
                    </div>

                    <livewire:data-picker />

                    <div  class="flex flex-col p-2">
                        <label for="room_id">Pokoje</label>
                        <x-items.select name="room_id">
                            <option selected disabled>Wybierz pokój</option>
                            @foreach($roomsQuery as $room)
                                <option name="room" value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </x-items.select>
                    </div>
                </div>

                <div class="flex flex-col mb-4">
                    <label for="comments">Zapytania/uwagi</label>
                    <x-items.textarea name="comments" placeholder="Wprowadź swoje zapytania/uwagi..."></x-items.textarea>
                </div>

                <x-forms.primary-button>Wyślij rezerwację</x-forms.primary-button>
            </form>
        </div>
    </div>
</x-layouts.app>
