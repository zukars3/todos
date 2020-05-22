<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreToDoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testTextIsRequired()
    {
        $response = $this->post('/to-dos');

        $response->assertStatus(302);
        $response->assertSessionHasErrors(['text']);
    }

    public function testSuccessful(): void
    {
        $this->followingRedirects();

        $this->post('/to-dos', [
            'text' => 'New todo'
        ]);

        $this->assertDatabaseHas('todos', ['text' => 'New todo']);
    }
}
