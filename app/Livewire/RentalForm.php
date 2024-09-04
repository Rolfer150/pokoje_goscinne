<?php

namespace App\Livewire;

use App\Models\Room;
use Illuminate\Support\Collection;
use Livewire\Component;

class RentalForm extends Component
{
    private Room $roomsQuery;
    public function mount(Room $roomCollection)
    {
        $this->roomsQuery = $roomCollection;
    }
    public function render()
    {
        return view('livewire.rental-form');
    }

    public function getRooms(): Collection
    {

        return $this->roomsQuery->all();
    }
}
