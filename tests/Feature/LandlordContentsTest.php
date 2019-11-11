<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandlordContentsTest extends TestCase
{
    /**
     * GET OtherProds Page Test
     *
     * @return void
     */
    public function testLandlordContents()
    {
        $response = $this->get('/llcontents');
        $response->assertStatus(200);
        $response->assertSee('<h1>Landlord\'s Contents</h1>');
    }
}