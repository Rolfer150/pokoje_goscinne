<?php

namespace Tests\Feature;

use App\Filament\Resources\RoomResource;
use App\Models\Room;
use App\Models\User;
use Database\Seeders\RoomSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\ParallelTesting;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
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
        $this->adminUser = User::factory()->create();
        $this->actingAs($this->adminUser)->isAuthenticated();
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
}
