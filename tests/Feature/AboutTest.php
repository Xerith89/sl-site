<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutTest extends TestCase
{
    /**
     * GET About Page Test
     *
     * @return void
     */
    public function testAbout()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('<h1>About Us</h1>');
    }
}
