<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_can_register()
    {
        $response = $this->postJson('/register', [
            'name' => 'John Chamling',
            'email' => 'john@gmail.com',
            'password' => 'john123'
        ]);
        $response->assertStatus(201)
            ->assertJson(['message' => 'User registered Successfully.']);

        $this->assertDatabaseHas('users', [
            'email' => 'jogn@gmail.com',
        ]);
    }

    public function test_user_registeration_fails_with_invalid_data()
    {
        $response = $this->postJson('/register', [
            'name' => '',
            'email' => 'invalid-email',
            'password' => 'short',
        ]);
        $response->assertStatus(422)
            ->assertJsonValidationErrors('name', 'email', 'password');
    }
}
