<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\QuickQuote;
use Illuminate\Support\Facades\Event;
use App\Events\NewQuickQuoteEvent;

class DirectTest extends TestCase
{

    use RefreshDatabase;
    use WithFaker;
   
    public function setUp():void
    {
        parent::setUp();
        \Session::start();
    }

    /**
     * GET Direct Page Test
     *
     * @return void
     */
    public function testDirect()
    {
        $response = $this->get('/direct');
        $response->assertStatus(200);
        $response->assertSee(' <h2><strong>Standout Title</strong></h2>');
    }

    public function testDirect_FormSubmitsWithValidData() 
    {   
        Event::fake();
        $response = $this->post('/direct', $this->data());
        Event::assertDispatched(NewQuickQuoteEvent::class, 1);
        $response->assertStatus(302);
        $this->assertCount(1, QuickQuote::all()); 
    }

    public function testDirect_FormFailsWithoutName() 
    {
        Event::fake();
        $response = $this->post('/direct', array_merge($this->data(), [
            'name' => ''
        ]));
        $response->assertSessionHasErrors([
            'name'
        ]);
        Event::assertNotDispatched(NewQuickQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(0, QuickQuote::all()); 
    }

    public function testDirect_FormFailsWithoutEmail() 
    {
        Event::fake();
        $response = $this->post('/direct', array_merge($this->data(), [
            'email' => ''
        ]));
        $response->assertSessionHasErrors([
            'email'
        ]);
        Event::assertNotDispatched(NewQuickQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(0, QuickQuote::all()); 
    }

    public function testDirect_FormFailsWithoutPhone() 
    {
        Event::fake();
        $response = $this->post('/direct', array_merge($this->data(), [
            'phone' => ''
        ]));
        $response->assertSessionHasErrors([
            'phone'
        ]);
        Event::assertNotDispatched(NewQuickQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(0, QuickQuote::all()); 
    }

    public function testDirect_FormFailsWithoutRisk() 
    {
        Event::fake();
        $response = $this->post('/direct', array_merge($this->data(), [
            'risk' => ''
        ]));
        $response->assertSessionHasErrors([
            'risk'
        ]);
        Event::assertNotDispatched(NewQuickQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(0, QuickQuote::all()); 
    }

    public function testDirect_FormFailsWithoutRebuild() 
    {
        Event::fake();
        $response = $this->post('/direct', array_merge($this->data(), [
            'rebuild' => ''
        ]));
        $response->assertSessionHasErrors([
            'rebuild'
        ]);
        Event::assertNotDispatched(NewQuickQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(0, QuickQuote::all()); 
    }

    public function testDirect_FormFailsWithoutStartdate() 
    {
        Event::fake();
        $response = $this->post('/direct', array_merge($this->data(), [
            'startdate' => ''
        ]));
        $response->assertSessionHasErrors([
            'startdate'
        ]);
        Event::assertNotDispatched(NewQuickQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(0, QuickQuote::all()); 
    }

    public function testDirect_FormPassesWithoutCurrentPremium() 
    {
        Event::fake();
        $response = $this->post('/direct', array_merge($this->data(), [
            'currentpremium' => ''
        ]));
        Event::assertDispatched(NewQuickQuoteEvent::class, 1);
        $response->assertStatus(302);
        $this->assertCount(1, QuickQuote::all()); 
    }

    
    public function testDirect_FormPassesWithFile() 
    {
        Event::fake();
        Storage::fake('local');
        $file = UploadedFile::fake()->create('document.pdf');
        $response = $this->call('POST', '/direct', $this->data(), [$file]);
        Event::assertDispatched(NewQuickQuoteEvent::class, 1);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $this->assertCount(1, QuickQuote::all()); 
    }

    public function testDirect_FormPassesWithTwoFiles() 
    {
        Event::fake();
        Storage::fake('local');
        $file = UploadedFile::fake()->create('document.pdf');
        $filetwo = UploadedFile::fake()->create('documenttwo.pdf');
        $response = $this->call('POST', '/direct',$this->data(), [$file,$filetwo]);
        Event::assertDispatched(NewQuickQuoteEvent::class, 1);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $this->assertCount(1, QuickQuote::all()); 
    } 


    private function data() 
    { 
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' =>'07718285557',
            'risk' => $this->faker->address,
            'rebuild' => $this->faker->numberBetween($min = 500000, $max = 1000000),
            'startdate' => '2019-09-01',
            'currentpremium' => $this->faker->numberBetween($min = 100, $max = 1000),
            '_token' => csrf_token()
        ];
    }
}