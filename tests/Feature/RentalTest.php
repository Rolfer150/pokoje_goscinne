<?php

namespace Tests\Feature;

use App\Models\Rental;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RentalTest extends TestCase
{
    /**
     * Test wyświetlenia strony "Rezerwacja".
     */
    public function test_gets_create_page(): void
    {
        $response = $this->get(route('rental.create'));
        $response->assertOk();
    }

    /**
     * Test tworzenia nowej rezerwacji
     */
    public function test_saves_rental_to_database():void
    {
        $newRental = Rental::factory()
            ->for(\App\Models\Room::factory(), 'room')
            ->make();

        $response = $this->post(route('rental.store'), [
            'name' => $newRental->name,
            'email' => $newRental->email,
            'phone_number' => $newRental->phone_number,
            'comments' => $newRental->comments,
            'people_amount' => $newRental->people_amount,
            'rental_start' => $newRental->rental_start,
            'rental_end' => $newRental->rental_end,
            'room_id' => $newRental->room_id,
        ]);

        $response->assertRedirect(route('home'));

        $this->assertDatabaseHas('rentals', [
            'name' => $newRental->name,
            'email' => $newRental->email,
            'phone_number' => $newRental->phone_number,
            'comments' => $newRental->comments,
            'people_amount' => $newRental->people_amount,
            'rental_start' => $newRental->rental_start,
            'rental_end' => $newRental->rental_end,
            'room_id' => $newRental->room_id,
            'status' => \App\Enums\RentalStatus::WAITING
        ]);
    }
}
