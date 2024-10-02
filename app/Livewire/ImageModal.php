<?php

namespace App\Livewire;
use Livewire\Component;

class ImageModal extends Component
{
    public $photos = [];
    public bool $isOpened = false;
    public ?int $imageKey = null;
    public function mount($photos) {
        $this->photos = $photos;
    }
    public function render()
    {
        return view('livewire.image-modal');
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

    public function nextImage()
    {
        $imageArraySize = count($this->photos);
        $this->imageKey >= $imageArraySize - 1 ? $this->imageKey = 0 : $this->imageKey++;
    }

    public function previousImage()
    {
        $imageArraySize = count($this->photos);
        $this->imageKey <= 0 ? $this->imageKey = $imageArraySize - 1 : $this->imageKey--;
    }
}
