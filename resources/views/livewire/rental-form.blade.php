<div>
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
            <label for="people_amount" class="required">Ilość gości</label>
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
                @foreach($this->getRooms() as $room)
                    <option name="room" value="{{ $room->id }}">{{ $room->name }}</option>
                @endforeach
            </x-items.select>
        </div>
    </div>

    <div class="flex flex-col mt-6 mb-4">
        <label for="comments">Uwagi <span class="italic">(można podać w punktach)</span></label>
        <x-items.textarea name="comments" placeholder="Wprowadź swoje zapytania/uwagi..."></x-items.textarea>
    </div>
</div>
