<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateToDoControllerTest extends TestCase
{
    public function testRouteExist(): void
    {
        $response = $this->get('/to-dos/create');
        $response->assertStatus(200);
    }

    public function testForLabelExists(): void
    {
        $response = $this->get('/to-dos/create');
        $response->assertSeeText('Enter the text:');
    }
}
