<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class DataPicker extends Component
{
    public string $startDateName;
    public string $endDateName;
    public string $type = 'date';
    public $todayDate;
    public $startDate;
    public $endDate;
    public $maxStart;
    public $minEnd;

    public function mount($startDateName = 'rental_start', $endDateName = 'rental_end')
    {
        $this->todayDate = Carbon::now();
        $this->startDateName = $startDateName;
        $this->endDateName = $endDateName;
    }

    public function render()
    {
        return view('livewire.data-picker');
    }

    public function getMinStartDate() {
        return $this->todayDate->format('Y-m-d');
    }

    public function getMaxStartDate() {
        if($this->endDate) {
            $this->maxStart = Carbon::parse($this->endDate)->subDay();
            return $this->maxStart->format('Y-m-d');
        }
        return null;
    }

    public function getMinEndDate() {
        if($this->startDate) {
            $this->minEnd = Carbon::parse($this->startDate)->addDay();
            return $this->minEnd->format('Y-m-d');
        }
        return $this->todayDate->tomorrow()->format('Y-m-d');
    }

}
