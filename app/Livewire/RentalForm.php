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
    public string $startDate = '';
    public string $endDate = '';
    public int|null $people_amount = 0;
    public function render()
    {
        $rooms = $this->getRooms();
        return view('livewire.rental-form', compact('rooms'));
    }

    // Otrzymanie kolekcji pokoi
    public function getRooms(): Collection
    {
        $guests = $this->people_amount;
        $start = Carbon::parse($this->startDate)->format('Y-m-d');
        $end = Carbon::parse($this->endDate)->format('Y-m-d');

        return Room::query()
            ->when($this->isStartEndDateSet(), function (Builder $query) use ($start, $end) {
                return $query->whereDoesntHave('rentals', function (Builder $query) use ($start, $end) {
                    $query->where(function (Builder $query) use ($start, $end) {
                        $query
                            ->where('rentals.status', '=', 'zakończono')
                            ->whereBetween('rentals.rental_start', [$start, $end])
                            ->orWhereBetween('rentals.rental_end', [$start, $end]);
                    });
                });
            })
            ->when($guests > 0, function (Builder $query) use ($guests) {
                return $query->where('rooms.bed_amount', '>=', $guests);
            })
            ->select('rooms.id', 'rooms.name')
            ->get();
    }

    #[On('start-date')]
    public function getStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    #[On('end-date')]
    public function getEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function isStartEndDateSet(): bool
    {
        return $this->startDate !== '' && $this->endDate !== '';
    }

    public function isPeopleAmountSet(): bool
    {
        return $this->people_amount > 0 || $this->people_amount != null;
    }
}
