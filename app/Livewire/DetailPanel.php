<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;

class DetailPanel extends Component
{
    public $room;
    public bool $isClosed = false;
    public ?int $imageKey = null;
    public function mount($room)
    {
        $this->room = $room;
    }

    public function render()
    {
        return view('livewire.detail-panel');
    }
    public function openModal($key)
    {
        $this->imageKey = $key;
        $this->isClosed = true;

    }

    public function closeModal()
    {
        $this->imageKey = null;
        $this->isClosed = false;
    }

    public function getIsClosed()
    {
        return $this->isClosed;
    }
}
