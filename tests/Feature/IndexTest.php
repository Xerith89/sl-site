<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IndexTest extends TestCase
{
    /**
     * GET Homepage Test
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('  <h2 class="mt-3 mb-3 ml16">Stephen Lower <br> Insurance Services</h2>');
    }
}
