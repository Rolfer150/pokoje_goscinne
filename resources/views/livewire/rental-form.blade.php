<div class="space-y-6 mb-6">
    <div class="grid grid-cols-1 md:grid-cols-2 space-x-2">
        <div>
            <h4 class="text-xl lato-bold mb-2 ml-2">Dane osobowe</h4>

            <div class="flex flex-col p-2 space-y-2">
                <label for="name">Imię i nazwisko</label>
                <x-items.input-text
                    type="text"
                    name="name"
                    placeholder="Wprowadź swoje imię i nazwisko..."/>
            </div>

            <div class="flex flex-col p-2 space-y-2">
                <label for="email" class="required_email_or_phone">Adres e-mail</label>
                <x-items.input-text
                    type="email"
                    name="email"
                    placeholder="Wprowadź swój adres e-mail..."/>
            </div>

            <div class="flex flex-col p-2 space-y-2">
                <label for="phone_number" class="required_email_or_phone">Numer telefonu</label>
                <x-items.input-text
                    type="tel"
                    name="phone_number"
                    placeholder="Wprowadź swój numer telefonu..."/>
            </div>
        </div>

        <div>
            <h4 class="text-xl lato-bold mb-2 ml-2">Dane wynajmu pokoju</h4>

            <livewire:date-picker/>

            @if($this->isStartEndDateSet())
                <div class="flex flex-col p-2 space-y-2">
                    <label for="people_amount" class="required_field">Ilość gości</label>
                    <x-items.input-text
                        type="number"
                        name="people_amount"
                        min="1"
                        max="4"
                        placeholder="Ilość gości..."
                        wire:model.blur="peopleAmount"/>
                </div>
            @endif
            @if($errors->has('people_amount'))
                <p class="text-sm text-red-500">{{ $errors->first('people_amount') }}</p>
            @endif

            @if($this->isPeopleAmountSet() && $this->isStartEndDateSet())
                <div class="flex flex-col p-2 space-y-2">
                    <label for="room_id" class="required_field">Pokoje</label>
                    <select
                        name="room_id"
                        class="p-2 rounded-md mb-4 text-gray-700 border-2 block focus:outline-emerald-600 bg-no-repeat text-right"
                        wire:model.blur="selectedRoomId">
                        <option value="0">Wybierz pokój</option>
                        @foreach($rooms as $room)
                            <option name="room_id" value="{{ $room->id }}">{{ $room->name }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            @if($errors->has('room_id'))
                <p class="text-sm text-red-500">{{ $errors->first('room_id') }}</p>
            @endif
        </div>
    </div>

    @if($this->selectedRoomId !== 0 && $this->isPeopleAmountSet() && $this->isStartEndDateSet())
        <x-layouts.rental.room-details
            :room="$this->getSelectedRoom()"
            :start="$this->getFormattedDate($this->startDate)"
            :end="$this->getFormattedDate($this->endDate)"
            :day-length="$this->getRentalDayLength()"
            :sum-price="$this->getRentalPriceSum()"/>
    @endif

    <div class="flex flex-col">
        <label for="comments" class="lato-bold text-xl mb-2 ml-2">Uwagi <span class="lato-regular-italic text-lg">(można podać w punktach)</span></label>
        <x-items.textarea name="comments" placeholder="Wprowadź swoje zapytania/uwagi..."></x-items.textarea>
    </div>

    <x-forms.primary-button wire:click="$wire.submit" wire:confirm="Czy na pewno chcesz złożyć rezerwację?">Wyślij rezerwację</x-forms.primary-button>
</div>
