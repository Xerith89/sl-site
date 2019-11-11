<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CareersTest extends TestCase
{
    /**
     * GET Careers Page Test
     *
     * @return void
     */
    public function testCareers()
    {
        $response = $this->get('/careers');
        $response->assertStatus(200);
        $response->assertSee('<p class="lead">Here you will find all of our latest job opportunities.</p>');
    }
}