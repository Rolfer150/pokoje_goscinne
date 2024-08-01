<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        'accommodation_number',
        'price',
        'is_occupied'
    ];

    protected $casts = [
        'image_path' => 'array',
    ];

    public function rental(): HasOne
    {
        return $this->hasOne(Rental::class);
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

    public function getFacilities(int $roomId)
    {
        return RoomFacility::query()
            ->join('room_room_facility',
                'room_facilities.id',
                '=',
                'room_room_facility.room_facility_id')
            ->where('room_room_facility.room_id', '=', $roomId)
            ->pluck('name');
    }
}
