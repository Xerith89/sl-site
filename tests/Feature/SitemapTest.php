<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SitemapTest extends TestCase
{
    /**
     * GET Sitemap Page Test
     *
     * @return void
     */
    public function testSitemap()
    {
        $response = $this->get('/sitemap');
        $response->assertStatus(200);
        $response->assertSee('<h2 class="card-header text-center"><u>Services</u></h2>');
    }
}