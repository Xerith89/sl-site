<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommercialTest extends TestCase
{
    /**
     * GET Commercial Page Test
     *
     * @return void
     */
    public function testCommercial()
    {
        $response = $this->get('/commercial');
        $response->assertStatus(200);
        $response->assertSee(' <h1>Commercial Premises</h1>');
    }
}