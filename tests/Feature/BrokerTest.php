<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Event;
use App\Events\NewAgencyEvent;
use App\Agency;

class BrokerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function setUp():void
    {
        parent::setUp();
        \Session::start();
    }
    /**
     * GET Broker Page Test
     *
     * @return void
     */
    public function testBroker()
    {
        $response = $this->get('/broker');
        $response->assertStatus(200);
        $response->assertSee('<h4 class="display-4">Your Clients Come First</h4>');
    }

    public function testBroker_FormSubmitsWithValidData()
    {
        $this->withoutExceptionHandling();
        Event::fake();
        $response = $this->post('/broker', $this->data());
        $response->assertStatus(302);
        Event::assertDispatched(NewAgencyEvent::class, 1);
        $this->assertCount(1, Agency::all());
    }

    public function testBroker_FormFailsWithInvalidData()
    {
        Event::fake();
        $response = $this->post('/broker', [ '_token' => csrf_token()]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'CompanyName',
            'CompanyEmail',
            'CompanyTel',
            'TradingAddress',
            'EstablishedDate',
            'FinancialYearEnd',
            'CompanyRegNo',
            'IndemInsurer',
            'IndemPolicyNumber',
            'IndemRenewalDate',
            'IndemLimit',
            'IndemExcess',
            'CriminalConvictions',
            'AgencyTerminated',
        ]);
        Event::assertNotDispatched(NewAgencyEvent::class);
        $this->assertCount(0, Agency::all());
    }

    public function testBroker_FormSubmitsWithSoleTraderData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'BusinessType' => 'Sole',
            'FirstApplicantName' => $this->faker->name,
            'FirstApplicantAddress' => $this->faker->address,
            'FirstApplicantHomeOwner' => 'Yes'
        ]));
        $response->assertStatus(302);
        Event::assertDispatched(NewAgencyEvent::class, 1);
        $this->assertCount(1, Agency::all());
    }

    public function testBroker_FormDoesNotSubmitWithoutSoleTraderData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'BusinessType' => 'Sole',
            'FirstApplicantName' => '',
            'FirstApplicantAddress' => '',
            'FirstApplicantHomeOwner' => ''
        ]));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewAgencyEvent::class);
        $this->assertCount(0, Agency::all());
    }

    public function testBroker_FormSubmitsWithPartnershipData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'BusinessType' => 'Partnership',
            'FirstApplicantName' => $this->faker->name,
            'FirstApplicantAddress' => $this->faker->address,
            'FirstApplicantHomeOwner' => 'Yes',
            'SecondApplicantName' => $this->faker->name,
            'SecondApplicantAddress' => $this->faker->address,
            'SecondApplicantHomeOwner' => 'Yes'
        ]));
        $response->assertStatus(302);
        Event::assertDispatched(NewAgencyEvent::class, 1);
        $this->assertCount(1, Agency::all());
    }

    public function testBroker_FormDoesNotSubmitWithoutPartnershipData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'BusinessType' => 'Partnership',
            'FirstApplicantName' => '',
            'FirstApplicantAddress' => '',
            'FirstApplicantHomeOwner' => '',
            'SecondApplicantName' => '',
            'SecondApplicantAddress' => '',
            'SecondApplicantHomeOwner' => ''
        ]));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewAgencyEvent::class);
        $this->assertCount(0, Agency::all());
    }

    public function testBroker_FormSubmitsWithPrincipalData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'FCAAuth' => 'AppointedRep',
            'FCAFirmRef' => '',
            'PrincipalName' => $this->faker->company,
            'PrincipalTelNo' => '01303217567',
            'PrincipalAddress' => $this->faker->address
        ]));
        $response->assertStatus(302);
        Event::assertDispatched(NewAgencyEvent::class, 1);
        $this->assertCount(1, Agency::all());
    }

    public function testBroker_FormDoesNotSubmitWithoutAuthorisationData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'FCAAuth' => '',
            'FCAFirmRef' => '',
            
        ]));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewAgencyEvent::class);
        $this->assertCount(0, Agency::all());
    }

    public function testBroker_FormDoesNotSubmitWithoutPrincipalData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'FCAAuth' => 'AppointedRep',
            'FCAFirmRef' => '',
            'PrincipalName' => '',
            'PrincipalTelNo' => '',
            'PrincipalAddress' => '',
        ]));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewAgencyEvent::class);
        $this->assertCount(0, Agency::all());
    }

    public function testBroker_FormSubmitsWithConvictionsData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'CriminalConvictions' => 'Yes',
            'CriminalConvictionsInfo' => 'Some Stuff'
        ]));
        $response->assertStatus(302);
        Event::assertDispatched(NewAgencyEvent::class, 1);
        $this->assertCount(1, Agency::all());
    }

    public function testBroker_FormDoesNotSubmitWithoutConvictionsData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'CriminalConvictions' => 'Yes',
            'CriminalConvictionsInfo' => ''
        ]));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewAgencyEvent::class);
        $this->assertCount(0, Agency::all());
    }

    public function testBroker_FormSubmitsWithCancelledData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'AgencyTerminated' => 'Yes',
            'AgencyTerminatedInfo' => 'Some Stuff'
        ]));
        $response->assertStatus(302);
        Event::assertDispatched(NewAgencyEvent::class, 1);
        $this->assertCount(1, Agency::all());
    }

    public function testBroker_FormDoesNotSubmitWithoutCancelledData()
    {
        Event::fake();
        $response = $this->post('/broker', array_merge($this->data(), [
            'AgencyTerminated' => 'Yes',
            'AgencyTerminatedInfo' => ''
        ]));
        $response->assertStatus(302);
        Event::assertNotDispatched(NewAgencyEvent::class);
        $this->assertCount(0, Agency::all());
    }

     ///////TEST DATA////////
     private function data() 
     {    
        return [
            'ApplicantName' => $this->faker->name,
            'ApplicantPosition' => 'CEO',
            'CompanyName' => $this->faker->company,
            'CompanyEmail' => $this->faker->email,
            'CompanyTel' => '01303614719',
            'CompanyWebsite' => $this->faker->url,
            'BusinessType' => 'Other',
            'TradingAddress' => $this->faker->address,
            'FCAAuth' => 'FCA',
            'FCAFirmRef' => '12345',
            'EstablishedDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'FinancialYearEnd' => $this->faker->date($format = 'm-d'),
            'CompanyRegNo' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'IndemInsurer' => $this->faker->company,
            'IndemPolicyNumber' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'IndemRenewalDate' => $this->faker->date($format = 'Y-m-d', $min = 'now'),
            'IndemLimit' => $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'IndemExcess' => $this->faker->randomDigitNotNull,
            'CriminalConvictions' => 'No',
            'AgencyTerminated' => 'No',
            '_token' => csrf_token()
        ];
     }
}