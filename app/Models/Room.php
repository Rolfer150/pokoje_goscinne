<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    ];

    protected $casts = [
        'image_path' => 'array',
    ];

    public function rental(): HasMany
    {
        return $this->hasMany(Rental::class);
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
