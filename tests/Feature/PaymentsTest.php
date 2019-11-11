<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Event;
use App\Events\NewPaymentEvent;
use App\Payment;

class PaymentsTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
   
    public function setUp():void
    {
        parent::setUp();
        \Session::start();
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPayments()
    {
        $response = $this->get('/payments');
        $response->assertStatus(200);
        $response->assertSee('<h1>Make A Payment</h1>');
    }

    public function testPayments_FormSubmitsWithValidData()
    {
        Event::fake();
        $response = $this->post('/payments', $this->data());
        $response->assertStatus(302);
        Event::assertDispatched(NewPaymentEvent::class, 1);
        $this->assertCount(1, Payment::all());
    }

    public function testPayments_FormFailsWithoutValidData()
    {
        Event::fake();
        $response = $this->post('/payments', [ '_token' => csrf_token()]);
        $response->assertStatus(302);
        Event::assertNotDispatched(NewPaymentEvent::class);
        $this->assertCount(0, Payment::all());
    }

    public function testPayments_FormFailsWithoutName()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['Name' => '']));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewPaymentEvent::class);
        $this->assertCount(0, Payment::all());
    }

    public function testPayments_FormFailsWithoutPhoneNumber()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['PhoneNumber' => '']));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewPaymentEvent::class);
        $this->assertCount(0, Payment::all());
    }

    public function testPayments_FormFailsWithoutEmailAddress()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['EmailAddress' => '']));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewPaymentEvent::class);
        $this->assertCount(0, Payment::all());
    }

    public function testPayments_FormFailsWithoutConfirmEmailAddress()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['ConfirmEmail' => '']));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewPaymentEvent::class);
        $this->assertCount(0, Payment::all());
    }

    public function testPayments_FormFailsWithoutSpecNumber()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['SpecificationNumber' => '']));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewPaymentEvent::class);
        $this->assertCount(0, Payment::all());
    }

    public function testPayments_FormFailsWithoutPostCode()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['RiskPostCode' => '']));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewPaymentEvent::class);
        $this->assertCount(0, Payment::all());
    }

    public function testPayments_FormFailsWithoutStartDate()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['StartDate' => '']));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewPaymentEvent::class);
        $this->assertCount(0, Payment::all());
    }

    public function testPayments_FormFailsWithoutAmountPaid()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['AmountPaid' => '']));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewPaymentEvent::class);
        $this->assertCount(0, Payment::all());
    }

    public function testPayments_FormPassesWithComments()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['Comments' => 'This is a comment']));
        $response->assertStatus(302);
        Event::assertDispatched(NewPaymentEvent::class, 1);
        $this->assertCount(1, Payment::all());
    }

    public function testPayments_FormPassesWithBigAmount()
    {
        Event::fake();
        $response = $this->post('/payments', array_merge($this->data(), ['AmountPaid' => '1200.99']));
        $response->assertStatus(302);
        Event::assertDispatched(NewPaymentEvent::class, 1);
        $this->assertCount(1, Payment::all());
    }


     ///////TEST DATA////////
     private function data() 
     {
         return [
             'Name' => $this->faker->name,
             'PhoneNumber' =>'01304614719',
             'EmailAddress' => 'test@test.com',
             'ConfirmEmail' => 'test@test.com',
             'SpecificationNumber' => '123456789',
             'RiskPostCode' => 'CT14 0LT',
             'StartDate' => '2019-09-01',
             'AmountPaid' => '17.99',
             'Comments' => '',
             '_token' => csrf_token()
         ];
     }
}
