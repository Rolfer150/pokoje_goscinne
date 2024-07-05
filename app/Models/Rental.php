<?php

namespace App\Models;

use App\Enums\PaymentType;
use App\Enums\RentalStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'people_amount',
        'rental_start',
        'rental_end',
        'payment',
        'payment_type',
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

    public function room(): HasOne
    {
        return $this->hasOne(Room::class);
    }
}
