<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PrivacyTest extends TestCase
{
    /**
     * GET Privacy Page Test
     *
     * @return void
     */
    public function testPrivacy()
    {
        $response = $this->get('/privacy');
        $response->assertStatus(200);
        $response->assertSee('<h3><strong>Website Privacy and Cookie Policy of Stephen Lower Insurance Services Ltd</strong></h3>');
    }
}