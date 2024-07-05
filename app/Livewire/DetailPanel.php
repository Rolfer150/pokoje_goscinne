<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;

class DetailPanel extends Component
{
    public $room;
    public function mount($room)
    {
        $this->room = $room;
    }

    public function render()
    {
        return view('livewire.detail-panel');
    }
}
