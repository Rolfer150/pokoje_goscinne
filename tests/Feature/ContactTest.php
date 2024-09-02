<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * Test wyświetlenia strony "Kontakt".
     */
    public function test_gets_create_page(): void
    {
        $response = $this->get(route('message.create'));
        $response->assertStatus(200);
    }

    /**
     * Test tworzenia nowej rezerwacji
     */
    public function test_can_create_rental()
    {
        // TODO
    }
}
