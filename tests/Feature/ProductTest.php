<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_create_product()
    {
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $response = $this->postJson('/api/products', [
            'name' => 'Test Product',
            'price' => 100,
            'description' => 'Test description'
        ]);

        $response->assertStatus(201);
    }
}
