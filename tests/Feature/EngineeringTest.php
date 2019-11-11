<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EngineeringTest extends TestCase
{
    /**
     * GET Engineering Page Test
     *
     * @return void
     */
    public function testEngineering()
    {
        $response = $this->get('/engineering');
        $response->assertStatus(200);
        $response->assertSee('  <h1>Lift Engineering</h1>');
    }
}