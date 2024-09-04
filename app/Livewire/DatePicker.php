<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\View\View;
use Livewire\Component;

class DatePicker extends Component
{
    public string $startDateName;
    public string $endDateName;
    public string $type = 'date';
    public string $startDate = '';
    public string $endDate = '';
    public Carbon $todayDate;
    public Carbon $maxStart;
    public Carbon $minEnd;
    public Carbon $maxEnd;

    public function mount($startDateName = 'rental_start', $endDateName = 'rental_end')
    {
        $this->todayDate = Carbon::now();
        $this->startDateName = $startDateName;
        $this->endDateName = $endDateName;
    }

    public function render(): View
    {
        return view('livewire.date-picker');
    }

    public function getMinStartDate(): string
    {
        return $this->todayDate->format('Y-m-d');
    }

    public function getMaxStartDate(): ?string
    {
        if($this->endDate) {
            $this->maxStart = Carbon::parse($this->endDate)->subDay();
            return $this->maxStart->format('Y-m-d');
        }
        return null;
    }

    public function getMinEndDate(): string
    {
//        dd($this->startDate);
        if($this->startDate) {
            $this->minEnd = Carbon::parse($this->startDate)->addDay();
            return $this->minEnd->format('Y-m-d');
        }
        return $this->todayDate->tomorrow()->format('Y-m-d');
    }

    public function getMaxEndDate(): ?string
    {
        if ($this->startDate) {
            $this->maxEnd = Carbon::parse($this->startDate)->addDays(30);
            return $this->maxEnd->format('Y-m-d');
        }
        return null;
    }

    public function updatedStartDate()
    {
        $this->dispatch('start-date', $this->startDate);
    }

    public function updatedEndDate()
    {
        $this->dispatch('end-date', $this->endDate);
    }
}
