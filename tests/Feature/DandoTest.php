<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DandoTest extends TestCase
{
    /**
     * GET Dando Test
     *
     * @return void
     */
    public function testDando()
    {
        $response = $this->get('/dando');
        $response->assertStatus(200);
        $response->assertSee('<h1>Directors And Officers</h1>');
    }
}
