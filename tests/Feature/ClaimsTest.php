<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Event;
use App\Events\NewClaimEvent;
use App\Events\NewUpdatedClaimEvent;
use App\Claim;
use App\UpdatedClaim;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ClaimsTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
   
    public function setUp():void
    {
        parent::setUp();
        \Session::start();
    }
    
    public function testClaims()
    {
        $response = $this->get('/claims');
        $response->assertStatus(200);
        $response->assertSee('  <h3 class="mt-3">Register A New Claim</h3>');
    }

    public function testClaims_FormSubmitsWithRequiredData()
    {
        Event::fake();
        $response = $this->post('/claims', $this->data());
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        Event::assertDispatched(NewClaimEvent::class, 1);
        $this->assertCount(1, Claim::all());
    }

    public function testClaims_FormFailsWithInvalidData()
    {
        Event::fake();
        $response = $this->post('/claims', [ '_token' => csrf_token()]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'Name',
            'PhoneNumber',
            'SecondPhoneNumber',
            'Email',
            'RiskAddress',
            'SpecificationNumber' ,
            'InsuredName',
            'DamageCause',
            'Damage',
            'RecoverVAT',
            'SettlementPayee',
            'ChequeAddress',
        ]);
        Event::assertNotDispatched(NewClaimEvent::class);
        $this->assertCount(0, Claim::all());
    }

    public function testClaims_FormSubmitsWithAllData()
    {
        Event::fake();
        $response = $this->post('/claims', $this->extraData());
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        Event::assertDispatched(NewClaimEvent::class, 1);
        $this->assertCount(1, Claim::all());
    }

    public function testUpdatedClaims_FormSubmitsWithAllData()
    {
        Event::fake();
        $response = $this->post('/claims/updatedclaims', $this->updatedData());
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        Event::assertDispatched(NewUpdatedClaimEvent::class, 1);
        $this->assertCount(1, UpdatedClaim::all());
    }

    public function testUpdatedClaims_FormDoesNotSubmitWithoutAllData()
    {
        Event::fake();
        $response = $this->post('/claims/updatedclaims', [ '_token' => csrf_token()]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'PolicyholderName',
            'PolicyholderEmail',
            'PolicyholderPostCode' ,
            'ClaimNumber',
            'PolicyholderComments',
        ]);
        Event::assertNotDispatched(NewUpdatedClaimEvent::class, 1);
        $this->assertCount(0, UpdatedClaim::all());
    }

    ///////TEST DATA////////

    private function updatedData()
    {
        return [
            'PolicyholderName' => 'Scuba Steve',
            'PolicyholderEmail' => 'Steve@steve.com',
            'PolicyholderPostCode' => 'CT14 0LT',
            'ClaimNumber' => '12456',
            'PolicyholderComments' => 'This is a comment',
            '_token' => csrf_token()
        ];
    }
    private function data() 
    {
        return [
            'Name' => $this->faker->name,
            'PhoneNumber' =>'01304614719',
            'SecondPhoneNumber' =>'07718285557',
            'Email' => 'test@test.com',
            'confirm-email' => 'test@test.com',
            'RiskAddress' => $this->faker->address,
            'SpecificationNumber' => '123456789',
            'InsuredName' => $this->faker->name,
            'DamageCause' =>'Tornado',
            'Damage' => 'My Cat Flap Is Broker',
            'InformedBy' => 'Myself',
            'DateAdvised' => '2019-09-01',
            'TradesmanName' => '',
            'DateEstimatesReceived' => '',
            'PoliceAdvised' => '',
            'DatePoliceAdvised' => '',
            'CrimeNumber' => '',
            'OfficerStationDealing' => '',
            'RecoverVAT' => 'yes',
            'SettlementPayee' => 'Me',
            'ChequeAddress' => 'My Address',
            '_token' => csrf_token()
        ];
    }

    private function extraData() 
    {
        return [
            'Name' => $this->faker->name,
            'PhoneNumber' =>'01304614719',
            'SecondPhoneNumber' =>'07718285557',
            'Email' => 'test@test.com',
            'confirm-email' => 'test@test.com',
            'RiskAddress' => $this->faker->address,
            'SpecificationNumber' => '123456789',
            'InsuredName' => $this->faker->name,
            'DamageCause' =>'Tornado',
            'Damage' => 'My Cat Flap Is Broker',
            'InformedBy' => 'Myself',
            'DateAdvised' => '2019-09-01',
            'TradesmanName' => 'Steve Harris',
            'DateEstimatesReceived' => '2019-04-09',
            'PoliceAdvised' => 'on',
            'DatePoliceAdvised' => '2019-09-05',
            'CrimeNumber' => '123456',
            'OfficerStationDealing' => 'PC Davies at Canterbury Police Station',
            'RecoverVAT' => 'yes',
            'SettlementPayee' => 'Me',
            'ChequeAddress' => 'My Address',
            '_token' => csrf_token()
        ];
    }
}

