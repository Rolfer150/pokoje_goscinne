<?php

namespace Tests\Feature;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessageTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test wyświetlenia strony "Kontakt".
     */
    public function test_gets_create_page(): void
    {
        $response = $this->get(route('message.create'));
        $response->assertOk();
    }

    /**
     * Test tworzenia nowego kontaktu
     */
    public function test_saves_message_to_database():void
    {
        $newMessage = Message::factory()->make();

        $response = $this->post(route('message.store'), [
            'name' => $newMessage->name,
            'email' => $newMessage->email,
            'phone_number' => $newMessage->phone_number,
            'topic' => $newMessage->topic,
            'content' => $newMessage->content,
        ]);

        $response->assertRedirect(route('home'));

        $this->assertDatabaseHas('messages', [
            'name' => $newMessage->name,
            'email' => $newMessage->email,
            'phone_number' => $newMessage->phone_number,
            'topic' => $newMessage->topic,
            'content' => $newMessage->content,
        ]);
    }

    public function test_fails_validation_if_the_topic_is_not_provided():void
    {
        $request = new StoreMessageRequest();

        $validator = Validator::make([
            'name' => 'this is a test',
            'email' => 'this@test.com',
            'phone_number' => '123456789',
            'content' => 'this is a test',
        ], $request->rules());

        $this->assertFalse($validator->passes());
        $this->assertContains('topic', $validator->errors()->keys());
    }
}
