<?php

namespace App\Observers;

use App\Enums\RentalStatus;
use App\Mail\RentalAccepted;
use App\Mail\RentalMade;
use App\Mail\RentalRejected;
use App\Models\Rental;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class RentalObserver
{
    /**
     * Handle the Rental "created" event.
     */
    public function created(Rental $rental): void
    {
        Mail::to($rental->email)->queue(new RentalMade($rental));
    }

    /**
     * Handle the Rental "updated" event.
     */
    public function updated(Rental $rental): void
    {
        if ($rental->rental_end > Carbon::now()->toDateString())
        {
            switch ($rental->status) {
                case RentalStatus::ACCEPTED:
                    Mail::to($rental->email)->queue(new RentalAccepted($rental));
                    break;
                case RentalStatus::REJECTED:
                    Room::where('id', $rental->room_id)
                        ->update(['is_occupied' => false]);

                    Mail::to($rental->email)->queue(new RentalRejected($rental));
                    break;
            }
        }
    }

    /**
     * Handle the Rental "deleted" event.
     */
    public function deleted(Rental $rental): void
    {
        //
    }

    /**
     * Handle the Rental "restored" event.
     */
    public function restored(Rental $rental): void
    {
        //
    }

    /**
     * Handle the Rental "force deleted" event.
     */
    public function forceDeleted(Rental $rental): void
    {
        //
    }
}
