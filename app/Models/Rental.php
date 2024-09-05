<?php

namespace App\Models;

use App\Enums\PaymentType;
use App\Enums\RentalStatus;
use App\Observers\RentalObserver;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[ObservedBy([RentalObserver::class])]
class Rental extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'room_id',
        'name',
        'email',
        'phone_number',
        'comments',
        'people_amount',
        'rental_start',
        'rental_end',
//        'payment',
//        'payment_type',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
//        'payment_type' => PaymentType::class,
        'status' => RentalStatus::class,
    ];

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    public function canRent($email):bool
    {
        return !Rental::where('email', '=', $email)->where('status', '=', true)->get()->toArray();
    }

    public function getFormattedDate($date): string
    {
        return Carbon::parse($date)->isoFormat('dddd, D MMMM YYYY');
    }
}
