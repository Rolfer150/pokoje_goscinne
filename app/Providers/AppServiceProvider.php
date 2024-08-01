<?php

namespace App\Providers;

use App\Models\Message;
use App\Models\Rental;
use App\Observers\MessageObserver;
use App\Observers\RentalObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Message::observe(MessageObserver::class);
        Rental::observe(RentalObserver::class);
    }
}
