<div>
    <div class="md:grid md:grid-cols-2">
{{--        <p>start date = {{ $this->startDate }}, end date = {{ $this->endDate }}</p>--}}
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
        </div>

        <livewire:date-picker />

        <div class="flex flex-col p-2">
            <label for="people_amount" class="required">Ilość gości</label>
            <input disabled class="p-2 rounded-md border-2 {{ $this->isStartEndDateSet() ? 'hidden' : '' }}" />
            <x-items.input-text
                class="{{ $this->isStartEndDateSet() ? '' : 'hidden' }}"
                type="number"
                name="people_amount"
                min="1"
                max="4"
                placeholder="Ilość gości..."
                wire:model.live="people_amount"/>
        </div>

        <div  class="flex flex-col p-2">
            <label for="room_id">Pokoje</label>
            <input disabled class="p-2 rounded-md border-2 {{ $this->isPeopleAmountSet() ? 'hidden' : '' }}" />
            <x-items.select
                class="{{ $this->isPeopleAmountSet() ? '' : 'hidden' }}"
                name="room_id">
                <option selected disabled>Wybierz pokój</option>
                @foreach($rooms as $room)
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
