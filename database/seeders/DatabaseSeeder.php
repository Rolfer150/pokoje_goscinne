<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            MainFacilitySeeder::class,
            RoomFacilitySeeder::class,
            RoomSeeder::class,
        ]);

        $roomFacilities = \App\Models\RoomFacility::all();
        Room::factory(4)
            ->create()
            ->each(function (Room $room) use ($roomFacilities) {
                $room->roomFacilities()->saveMany($roomFacilities->random(3));
            });
    }
}
