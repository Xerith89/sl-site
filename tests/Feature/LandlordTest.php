<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandlordTest extends TestCase
{
    /**
     * GET Landlord Page Test
     *
     * @return void
     */
    public function testLandlord()
    {
        $response = $this->get('/landlord');
        $response->assertStatus(200);
        $response->assertSee('<h1>Landlord Insurance</h1>');
    }
}