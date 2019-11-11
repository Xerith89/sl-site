<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Contact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Event;
use App\Events\NewContactEvent;

class ContactTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
   
    public function setUp():void
    {
        parent::setUp();
        \Session::start();
    }
    
    /**
     * GET Contact Test
     *
     * @return void
     */
    public function testContact()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSee('<p class="card-text mt-3">You can contact us using phone, post and fax or simply fill in our contact form to contact a specific department.</p>');
    }

     /**
     * POST Quote Page Test
     *
     * @return void
     * @test 
     */
    public function testContactFormSubmits_CorrectData()
    {
        Event::fake();
        $response = $this->post('/contact', $this->data());
        $response->assertStatus(302);
        $this->assertDatabaseHas('contacts',[
            'id' => '1',
            'Name' => 'Testy Testerson',
            'Email' => 'test@test.com',
            'Company' => 'Bluefin',
            'Reference' => '123456',
            'DepartmentRequired' => 'Underwriting',
            'QueryBody' => 'Test Query',
        ]);
        Event::assertDispatched(NewContactEvent::class, 1);
        $this->assertCount(1, Contact::all());
    }

    public function testContactForm_NameRequired()
    {
        Event::fake();
        $response = $this->post('/contact', array_merge($this->data(),['Name' => '']));
        $response->assertSessionHasErrors('Name');
        $response->assertStatus(302);
        Event::assertNotDispatched(NewContactEvent::class);
        $this->assertCount(0, Contact::all());
    }

    public function testContactForm_EmailRequired()
    {
        Event::fake();
        $response = $this->post('/contact', array_merge($this->data(),['Email' => '']));
        $response->assertSessionHasErrors('Email');
        $response->assertStatus(302);
        Event::assertNotDispatched(NewContactEvent::class);
        $this->assertCount(0, Contact::all());
    }

    public function testContactForm_DepRequired()
    {
        Event::fake();
        $response = $this->post('/contact', array_merge($this->data(),['DepartmentRequired' => '']));
        $response->assertSessionHasErrors('DepartmentRequired');
        $response->assertStatus(302);
        Event::assertNotDispatched(NewContactEvent::class);
        $this->assertCount(0, Contact::all());
    }

    public function testContactForm_QueryRequired()
    {
        Event::fake();
        $response = $this->post('/contact', array_merge($this->data(),['QueryBody' => '']));
        $response->assertSessionHasErrors('QueryBody');
        $response->assertStatus(302);
        Event::assertNotDispatched(NewContactEvent::class);
        $this->assertCount(0, Contact::all());
    }

    public function testContactForm_CompanyNotRequired()
    {
        Event::fake();
        $response = $this->post('/contact', array_merge($this->data(),['Company' => '']));
        $response->assertStatus(302);
        Event::assertDispatched(NewContactEvent::class, 1);
        $this->assertDatabaseHas('contacts',[
            'Name' => 'Testy Testerson',
            'Email' => 'test@test.com',
            'Reference' => '123456',
            'Company' => null,
            'DepartmentRequired' => 'Underwriting',
            'QueryBody' => 'Test Query',
        ]);
        $this->assertCount(1, Contact::all());
        
    }

    public function testContactForm_ReferenceNotRequired()
    {
        Event::fake();
        $response = $this->post('/contact', array_merge($this->data(),['Reference' => '']));
        $response->assertStatus(302);
        Event::assertDispatched(NewContactEvent::class, 1);
        $this->assertDatabaseHas('contacts',[
            'Name' => 'Testy Testerson',
            'Email' => 'test@test.com',
            'Reference' => null,
            'Company' => 'Bluefin',
            'DepartmentRequired' => 'Underwriting',
            'QueryBody' => 'Test Query',
        ]);
        $this->assertCount(1, Contact::all());
    }

    public function testContactForm_FormPassesWithFile() 
    {
        Event::fake();
        Storage::fake('local');
        $file = UploadedFile::fake()->create('document.pdf');
        $response = $this->call('POST', '/contact', $this->data(), [$file]);
        Event::assertDispatched(NewContactEvent::class, 1);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $this->assertCount(1, Contact::all()); 
    }

    public function testContact_FormPassesWithTwoFiles() 
    {
        Event::fake();
        Storage::fake('local');
        $file = UploadedFile::fake()->create('document.pdf');
        $filetwo = UploadedFile::fake()->create('documenttwo.pdf');
        $response = $this->call('POST', '/contact', $this->data(), [$file,$filetwo]);
        Event::assertDispatched(NewContactEvent::class, 1);
        $response->assertSessionHasNoErrors();
        $response->assertStatus(302);
        $this->assertCount(1, Contact::all()); 
    } 

    private function data() {
        return [
            'id' => '1',
            'Name' => 'Testy Testerson',
            'Email' => 'test@test.com',
            'Company' => 'Bluefin',
            'Reference' => '123456',
            'DepartmentRequired' => 'Underwriting',
            'QueryBody' => 'Test Query',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            '_token' => csrf_token()
        ];
    }


}
