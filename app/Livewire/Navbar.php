<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public bool $isVisible = false;

    public function hideShow()
    {
        $this->isVisible = !$this->isVisible;
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
