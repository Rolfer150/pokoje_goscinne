<?php

namespace App\Livewire;

use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\Attributes\On;
use Livewire\Component;

class RentalForm extends Component
{
    private int $dateLength = 0;
    public string $startDate = '';
    public string $endDate = '';
    public int|null $peopleAmount = 0;
    public int $selectedRoomId = 0;
    public function render()
    {
        $rooms = $this->getRooms();
        return view('livewire.rental-form', compact('rooms'));
    }

    // Otrzymanie kolekcji pokoi
    public function getRooms(): Collection
    {
        $guests = $this->peopleAmount;
        $start = Carbon::parse($this->startDate)->format('Y-m-d');
        $end = Carbon::parse($this->endDate)->format('Y-m-d');

        return Room::query()
            // Wykonanie zapytania jeśli funkcja isStartEndDateSet() zwraca 'true'
            ->when($this->isStartEndDateSet(), function (Builder $query) use ($start, $end) {
                // Zwrócenie modeli, które nie posiadają relacji 'rentals'
                return $query->whereDoesntHave('rentals', function (Builder $query) use ($start, $end) {
                    // Sprawdzenie, czy modele posiadają status rezerwacji 'aktywna' i czy daty rozpoczęcia i zakończenia nie pokrywają się z wybranymi w formularzu
                    $query->where(function (Builder $query) use ($start, $end) {
                        $query
                            ->where('rentals.status', '=', 'aktywna')
                            ->whereBetween('rentals.rental_start', [$start, $end])
                            ->orWhereBetween('rentals.rental_end', [$start, $end]);
                    });
                });
            })
            // Wykonanie zapytania jeśli funkcja isPeopleAmountSet() zwraca 'true'
            ->when($this->isPeopleAmountSet(), function (Builder $query) use ($guests) {
                // Zwrócenie modeli o ilości łóżek w pokojach większych bądź równych niż podana liczba osób
                return $query->where('rooms.bed_amount', '>=', $guests);
            })
            ->get();
    }

    // Otrzymanie wybranego w opcjach pokoju
    public function getSelectedRoom(): Room
    {
        return $this->getRooms()->where('id', '=', $this->selectedRoomId)->first();
    }

    // ustawienie daty rozpoczęcia pobytu pobranej z komponentu livewire DatePicker
    #[On('start-date')]
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    // ustawienie daty zakończenia pobytu pobranej z komponentu livewire DatePicker
    #[On('end-date')]
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getFormattedDate(string $date): string
    {
        return Carbon::parse($date)->format('d.m.Y');
    }

    // Otrzymanie sumy wynajmu za dobę
    public function getRentalPriceSum(): string
    {
        $roomPrice = $this->getSelectedRoom()->price;

        return str_replace('.', ',', number_format($roomPrice * $this->dateLength, 2)) . ' zł';
    }

    // Otrzymaj długość pobytu w dniach
    public function getRentalDayLength(): string
    {
        $dateStart = date_create($this->startDate);
        $dateEnd = date_create($this->endDate);

        $dateDiff = date_diff($dateStart, $dateEnd)->format("%a");
        $this->dateLength = (int) $dateDiff;

        if ($dateDiff === '1') return $dateDiff . ' noc';
        elseif ($dateDiff === '12') return $dateDiff . ' nocy';
        elseif ((int) $dateDiff[strlen($dateDiff) - 1] > 1 && (int) $dateDiff[strlen($dateDiff) - 1] < 5) return $dateDiff . ' noce';
        else return $dateDiff . ' nocy';
    }

    // Sprawdzenie, czy data rozpoczęcia i zakończenia zostały wybrane
    public function isStartEndDateSet(): bool
    {
        return $this->startDate !== '' && $this->endDate !== '';
    }

    // Sprawdzenie czy liczba osób jest większa od 0 lub nie jest równa null
    public function isPeopleAmountSet(): bool
    {
        return $this->peopleAmount > 0 || $this->peopleAmount != null;
    }
}
