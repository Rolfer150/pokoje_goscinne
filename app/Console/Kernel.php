<?php

namespace App\Console;

use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // Zmiana statusu rezerwacji na "zakończono" po terminie
        $schedule->call(function () {
            Rental::query()
                ->where('rental_end', '<', Carbon::now()->toDateString())
                ->update(['status' => 'zakończono']);
        })->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
