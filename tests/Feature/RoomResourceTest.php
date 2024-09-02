<?php

namespace Tests\Feature;

use App\Filament\Resources\RoomResource;
use App\Models\Room;
use App\Models\RoomFacility;
use App\Models\User;
use Database\Seeders\RoomSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class RoomResourceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Funkcja inicjalizująca kod podczas tworzenia jej instancji
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->seed();
        $adminUser = User::factory()->create();
        $this->actingAs($adminUser)->isAuthenticated();
    }

    /**
     * Test wyświetlenia strony głównej "Pokoje" panelu admina.
     */
    public function test_gets_index_page(): void
    {
        $response = $this->get(RoomResource::getUrl('index'));
        $response->assertStatus(200);
    }

    /**
     * Test wyświetlenia strony tworzenia "Pokoje" panelu admina.
     */
    public function test_gets_create_page(): void
    {
        $response = $this->get(RoomResource::getUrl('create'));
        $response->assertStatus(200);
    }

    /**
     * Test wyświetlenia strony edycji "Pokoje" panelu admina.
     */
    public function test_gets_edit_page(): void
    {
        $room = Room::first();
        $response = $this->get(RoomResource::getUrl('edit', ['record' => $room]));

        $response->assertStatus(200);
    }

    /**
     * Test tworzenia nowego pokoju.
     */
    public function test_can_create_new_room(): void
    {
        $newRoom = Room::factory()->make();
        $roomFacilities = RoomFacility::all();

        Livewire::test(RoomResource\Pages\CreateRoom::class)
            ->fillForm([
                'name' => $newRoom->name,
                'slug' => $newRoom->slug,
                'description' => $newRoom->description,
                'accommodation_number' => $newRoom->accommodation_number,
                'price' => $newRoom->price,
                'apartment_size' => $newRoom->apartment_size,
                'room_facilities' => $roomFacilities->random(3)->pluck('id')->toArray()
            ])
            ->call('create')
            ->assertHasNoFormErrors();

        $this->assertDatabaseHas('rooms', [
            'name' => $newRoom->name,
            'slug' => $newRoom->slug,
            'description' => $newRoom->description,
            'price' => $newRoom->price,
            'accommodation_number' => $newRoom->accommodation_number,
        ]);
    }


}
