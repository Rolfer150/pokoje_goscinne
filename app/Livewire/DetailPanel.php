<?php

namespace App\Livewire;

use App\Models\Room;
use Livewire\Component;

class DetailPanel extends Component
{
    public $room;
    public bool $isOpened = false;
    public ?int $imageKey = null;
    public function mount($room)
    {
        $this->room = $room;
    }

    public function render()
    {
        return view('livewire.detail-panel');
    }
    public function openModal(int $key)
    {
        $this->imageKey = $key;
        $this->isOpened = true;

    }

    public function closeModal()
    {
        $this->imageKey = null;
        $this->isOpened = false;
    }

    public function getIsOpened()
    {
        return $this->isOpened;
    }

    public function nextImage()
    {
        $imageArraySize = count($this->room->image_path);

        $this->imageKey >= $imageArraySize - 1 ? $this->imageKey = 0 : $this->imageKey++;
    }

    public function previousImage()
    {
        $imageArraySize = count($this->room->image_path);

        $this->imageKey <= 0 ? $this->imageKey = $imageArraySize - 1 : $this->imageKey--;
    }
}
