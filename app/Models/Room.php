<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'image_path',
        'description',
        'bed_amount',
        'price',
        'apartment_size',
    ];

    protected $casts = [
        'image_path' => 'json',
    ];

    public function rentals(): HasMany
    {
        return $this->hasMany(Rental::class);
    }

    public function getFreeRooms()
    {
        return Room::where('is_occupied', true)
            ->get();
    }

    public function roomFacilities(): BelongsToMany
    {
        return $this->belongsToMany(RoomFacility::class);
    }

    public function getPrice(): string
    {
        return str_replace('.', ',', $this->price) . ' zł';
    }

    public function getFacilities()
    {
        return RoomFacility::query()
            ->join('room_room_facility',
                'room_facilities.id',
                '=',
                'room_room_facility.room_facility_id')
            ->where('room_room_facility.room_id', '=', $this->id)
            ->pluck('name');
    }

    public function getURLImages($image)
    {
        if (str_starts_with($image, 'http')) {
            return $image;
        }

        return '/storage/' . $image;
    }
}
