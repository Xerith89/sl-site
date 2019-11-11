<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FlatsTest extends TestCase
{
    /**
     * GET Flats Page Test
     *
     * @return void
     */
    public function testFlats()
    {
        $response = $this->get('/flats');
        $response->assertStatus(200);
        $response->assertSee('<h1>Blocks Of Flats</h1>');
    }
}