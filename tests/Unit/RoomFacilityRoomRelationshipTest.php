<?php

namespace Tests\Unit;

use App\Models\Room;
use App\Models\RoomFacility;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoomFacilityRoomRelationshipTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test relacji wiele-do-wielu tabel "room" i "room_facilities".
     */
    public function test_room_facilities_belongs_to_room(): void
    {
        $room = Room::factory()->create();
        $roomFacility = RoomFacility::factory()->create();

        $room->roomFacilities()->sync([$roomFacility->id]);

        $this->assertDatabaseHas('room_room_facility', [
            'room_id' => $room->id,
            'room_facility_id' => $roomFacility->id
        ]);
    }
}
