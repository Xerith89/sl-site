<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Event;
use App\Events\NewQuoteEvent;
use App\Quote;
use Carbon\Carbon;

class QuoteTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
   
    public function setUp():void
    {
        parent::setUp();
        \Session::start();
    }
    
    public function testQuote()
    {
        $response = $this->get('/quote');
        $response->assertStatus(200);
        $response->assertSee('<h2 class="text-center header ml16"><strong>Getting a quote is so easy</strong></h2>');
    }

    public function testQuoteSubmission_Success()
    {
        $this->withoutExceptionHandling();
        Event::fake();
        $response = $this->post('/quote', $this->data());
        Event::assertDispatched(NewQuoteEvent::class, 1);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all()); 
                
    }

    public function testQuoteSubmission_PassesWithRelToPropMoreInfo()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'RelationshipToProperty' => 'other',
            'RelToPropMoreInfo' => 'Bla',
        ]));
        Event::assertDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all()); 
                
    }

     public function testQuoteSubmission_FlatsFailsWithoutRequiredFields()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'Firstname' => '',
            'Surname' => '',
            'RelationshipToProposer' => '',
            'PhoneNumber' =>'',
            'confirm-email' => '',
            'RelationshipToProperty' => '',
            'RiskNumber' => '',
            'RiskFirstLine' => '',
            'RiskCity' => '',
            'RiskCounty' => '',
            'RiskPostCode' => '',
            'GoodStateRepair' => '',
            'BuildType' => '',
            'NumFlats' => '',
            'NumFlatsUnoccupied' => '',
            'YearOfBuild' => '',
            'StandardConstruction' => '',
            'MajorWorks' => '',
            'ListedStatus' => '',
            'PrevSubs' => '',
            'PrevFlood' => '',
            'PrevClaims' => '',
            'StartDate' => '',
            'RebuildCost' => '',
        ]));
        Event::assertNotDispatched(NewQuoteEvent::class);
        $response->assertSessionHasErrors([
            'Firstname',
            'Surname',
            'RelationshipToProposer',
            'PhoneNumber',
            'RelationshipToProperty',
            'RiskNumber',
            'RiskFirstLine',
            'RiskCity',
            'RiskCounty',
            'RiskPostCode',
            'GoodStateRepair',
            'BuildType',
            'NumFlats',
            'NumFlatsUnoccupied',
            'YearOfBuild',
            'StandardConstruction',
            'MajorWorks',
            'ListedStatus',
            'PrevSubs',
            'PrevFlood',
            'PrevClaims',
            'StartDate',
            'RebuildCost',
        ]);
        $response->assertStatus(302);
        $this->assertCount(0, Quote::all()); 
                
    }

    public function testQuoteSubmission_FlatsFailedWithoutBuildTypeIfRequired()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'BuildType' => 'other',
            'BuildTypeInfo' => ''
        ]));
        Event::assertNotDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(0, Quote::all()); 
                
    }

    public function testQuoteSubmission_CommercialPassesWithRequiredFields()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'PropertyType' => 'commercial',
        ]));
        Event::assertDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all());          
    }

    public function testQuoteSubmission_CommercialFailsWithoutRequiredFields()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'PropertyType' => 'commercial',
            'ResiAreas' => '',
            'BusinessUse' => ''
        ]));
        Event::assertNotDispatched(NewQuoteEvent::class);
        $response->assertSessionHasErrors([
            'ResiAreas',
            'BusinessUse'
        ]);
        $response->assertStatus(302);
        $this->assertCount(0, Quote::all()); 
                
    }

    public function testQuoteSubmission_CommercialPassesWithRequiredFieldsResiAreas()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'PropertyType' => 'commercial',
            'ResiAreas' => 'yes',
        ]));
        Event::assertDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all()); 
                
    }

    public function testQuoteSubmission_CommercialFailsWithoutRequiredFieldsResiAreas()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'PropertyType' => 'commercial',
            'ResiAreas' => 'yes',
            'NumFlats' => '',
            'NumFlatsUnoccupied' => '',
        ]));
        Event::assertNotDispatched(NewQuoteEvent::class);
        $response->assertSessionHasErrors([
            'NumFlats',
            'NumFlatsUnoccupied'
        ]);
        $response->assertStatus(302);
        $this->assertCount(0, Quote::all()); 
                
    }

    public function testQuoteSubmission_ContentsOnlyPasses()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'PropertyType' => 'contents-only',
            'LandlordSumInsured' => '50,000'
        ]));
        Event::assertDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all()); 
                
    }

    public function testQuoteSubmission_LandlordPasses()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'PropertyType' => 'let',
        ]));
        Event::assertDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all()); 
                
    }

    public function testQuoteSubmission_PassesWithPropertyMoreInfo()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'PropertyType' => 'let',
            'GoodStateRepair' => 'no',
            'StandardConstruction' => 'no',
            'MajorWorks' => 'yes',
            'HMO' => 'yes',
            'Unoccupied' => 'yes',
        ]));
        Event::assertDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all()); 
                
    }

    public function testQuoteSubmission_PassesWithFloodSubsMoreInfo()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'PrevFlood' => 'yes',
            'PrevSubs' => 'yes',
            'FloodSubsMoreInfo' => 'More Infogggggg',
        ]));
        Event::assertDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all()); 
                
    }

    public function testQuoteSubmission_PassesWithClaimsInfo()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'PrevClaims' => 'yes',
        ]));
        Event::assertDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all()); 
                
    }

    public function testQuoteSubmission_EmpLiaPassesWithExemption()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'EmployerLiability' => 'on',
            'NumStaff' => '1',
            'ERNExempt' => 'on',
            'ERN' => ''
        ]));
        Event::assertDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(1, Quote::all());            
    }

    public function testQuoteSubmission_EngiFailsWithoutLifts()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'Engineering' => 'on',
            'NumLifts' => '',
        ]));

        $response->assertSessionHasErrors([
            'NumLifts',
        ]);
        Event::assertNotDispatched(NewQuoteEvent::class);
        $response->assertStatus(302);
        $this->assertCount(0, Quote::all());            
    }

    public function testQuoteSubmission_EngiFailsWithoutNumStoreys()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'Engineering' => 'on',
            'NumStoreys' => '',
        ]));
        Event::assertNotDispatched(NewQuoteEvent::class);
        $response->assertSessionHasErrors([
            'NumStoreys',
        ]);
       
        $response->assertStatus(302);
        $this->assertCount(0, Quote::all());            
    }

    public function testQuoteSubmission_DandoFailsWithoutIndem()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'DAndO' => 'on',
            'IndemnityLevel' =>'',
        ]));
        Event::assertNotDispatched(NewQuoteEvent::class);
        $response->assertSessionHasErrors([
            'IndemnityLevel',
        ]);
       
        $response->assertStatus(302);
        $this->assertCount(0, Quote::all());            
    }

    public function testQuoteSubmission_DandoFailsWithoutFlats()
    {
        Event::fake();
        $response = $this->post('/quote', array_merge($this->data(),[
            'DAndO' => 'on',
            'NumFlats' =>'',
        ]));
        Event::assertNotDispatched(NewQuoteEvent::class);
        $response->assertSessionHasErrors([
            'NumFlats',
        ]);
       
        $response->assertStatus(302);
        $this->assertCount(0, Quote::all());            
    }

    ///////TEST DATA////////
    private function data() {
      
        return [
            'Title' => $this->faker->title,
            'Firstname' => $this->faker->Firstname,
            'MiddleInitials' =>'A',
            'Surname' => $this->faker->lastName,
            'RelationshipToProposer' =>'Broker',
            'RelationshipMoreInfo' => 'Test',
            'Organisation' => $this->faker->company,
            'PhoneNumber' =>'01304614719',
            'Email' => 'test@test.com',
            'confirm-email' => 'test@test.com',
            'CorrieNumber' => $this->faker->buildingNumber,
            'CorrieFirstLine' => $this->faker->streetName,
            'CorrieSecondLine' => $this->faker->streetName,
            'CorrieCity' => $this->faker->city,
            'CorrieCounty' => $this->faker->state,
            'CorriePostCode' => $this->faker->postcode,
            'ProposerName' => $this->faker->name,
            'RelationshipToProperty' =>'owner',
            'RelToPropMoreInfo' => '',
            'PreviousPolicy' => '',
            'PreviousPolicyNumber' => '',
            'CCJ' => 'no',
            'Bankruptcy' => 'no',
            'Declined' => 'no',
            'Recovery' => 'no',
            'Prosecuted' => 'no',
            'Liquidated' => 'no',
            'Disqualified' => 'no',
            'Convictions' => 'no',
            'StatementsMoreInfo' => $this->faker->text($maxNbChars = 200),
            'RiskNumber' => $this->faker->buildingNumber,
            'RiskFirstLine' => $this->faker->streetName,
            'RiskSecondLine' => $this->faker->streetName,
            'RiskCity' => $this->faker->city,
            'RiskCounty' => $this->faker->state,
            'RiskPostCode' => $this->faker->postcode,
            'InterestedParties' => $this->faker->company,
            'PropertyType' => 'block-of-flats',
            'BuildType' => 'converted',
            'NumFlats' => $this->faker->numberBetween($min = 0, $max = 10),
            'NumFlatsUnoccupied' => $this->faker->numberBetween($min = 0, $max = 10),
            'ResiAreas' => 'no',
            'BusinessUse' => 'Butcher',
            'YearOfBuild' => $this->faker->numberBetween($min = 1800, $max = 2020),
            'BuildTypeInfo' => 'Test',
            'GoodStateRepair' => 'yes',
            'StandardConstruction' => 'yes',
            'MajorWorks' => 'no',
            'ListedStatus' => 'no',
            'HMO' => 'no',
            'Unoccupied' => 'no',
            'RiskDetailsMoreInfo' => $this->faker->text($maxNbChars = 200),
            'NumStoreys' => $this->faker->numberBetween($min = 0, $max = 10),
            'NumLifts' => $this->faker->numberBetween($min = 0, $max = 10),
            'Sprinklers' => 'no',
            'PrevSubs' => 'no',
            'PrevFlood' => 'no',
            'PrevClaims' => 'no',
            'ClaimsDetails' => json_encode(['date' => '2019-03-04','value' => 3000,'peril' => 'fire','desc' => 'A fire at my home']),
            'StartDate' => Carbon::today()->format('Y-m-d'),
            'RebuildCost' => $this->faker->numberBetween($min = 500000, $max = 1000000),
            'CommonAreas' => $this->faker->numberBetween($min = 25000, $max = 500000),
            'CurrentInsurer' => $this->faker->company,
            'CurrentExcess' => $this->faker->numberBetween($min = 0, $max = 500),
            'CurrentPremium' => $this->faker->numberBetween($min = 100, $max = 1000),
            'SpecialTerms' => $this->faker->text($maxNbChars = 200),
            'EmployerLiability' => 'on',
            'NumStaff' => $this->faker->randomDigit,
            'ERMExempt' => '',
            'ERN' => $this->faker->randomNumber($nbDigits = 7, $strict = false),
            'Engieering' => 'no',
            'Terrorism' => 'no',
            'DAndO' => 'no',
            'IndemnityLevel' =>'500000',
            '_token' => csrf_token()
        ];
    }
  
}