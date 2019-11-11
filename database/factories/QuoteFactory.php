<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Quote;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Quote::class, function (Faker $faker) {
    return [
        'Title' => $faker->title,
        'Firstname ' => $faker->firstName,
        'MiddleInitials ' =>'A',
        'Surname ' => $faker->lastName,
        'RelationshipToProposer ' =>'Broker',
        'RelationshipMoreInfo ' => 'Test',
        'Organisation ' => $faker->company,
        'Landline ' =>'01304614719',
        'Mobile ' =>'07718285557',
        'email ' => $faker->unique()->safeEmail,
        'CorrieNumber ' => $faker->buildingNumber,
        'CorrieFirstLine ' => $faker->streetName,
        'CorrieSecondLine ' => $faker->streetName,
        'CorrieCity ' => $faker->city,
        'CorrieCounty ' => $faker->state,
        'CorriePostCode ' => $faker->postcode,
        'ProposerName ' => $faker->name,
        'RelationshipToProperty ' =>'owner',
        'RelToPropMoreInfo ' => 'Test',
        'CCJ ' => 'No',
        'Bankruptcy ' => 'No',
        'Declined ' => 'No',
        'Recovery ' => 'No',
        'Prosecuted ' => 'No',
        'Liquidation ' => 'No',
        'Disqualified ' => 'No',
        'Convictions ' => 'No',
        'StatementsMoreInfo ' => 'Test',
        'RiskNumber ' => $faker->buildingNumber,
        'RiskFirstLine ' => $faker->streetName,
        'RiskSecondLine ' => $faker->streetName,
        'RiskCity ' => $faker->city,
        'RiskCounty ' => $faker->state,
        'RiskPostCode ' => $faker->postcode,
        'InterestedParties ' => $faker->company,
        'PropertyType ' => 'Block Of Flats',
        'BuildType ' => 'converted',
        'BuildTypeInfo ' => 'Test',
        'NumFlats ' => $faker->numberBetween($min = 0, $max = 10),
        'NumFlatsUnoccupied ' => $faker->numberBetween($min = 0, $max = 10),
        'ResiAreas ' => 'No',
        'BusinessUse ' => 'Butcher',
        'YearOfBuild ' => $faker->numberBetween($min = 1800, $max = 2020),
        'GoodStateRepair ' => 'No',
        'StandardConstruction ' => 'No',
        'MajorWorks ' => 'No',
        'ListedStatus ' => 'No',
        'HMO ' => 'No',
        'Unoccupied ' => 'No',
        'RiskDetailsMoreInfo ' => 'Test',
        'NumStoreys ' => $faker->numberBetween($min = 0, $max = 10),
        'NumLifts ' => $faker->numberBetween($min = 0, $max = 10),
        'Sprinklers ' => 'No',
        'PrevSubs ' => 'No',
        'PrevFlood ' => 'No',
        'PrevClaims ' => 'No',
        'ClaimsDetails ' => json_encode(['date' => '2018-03-04','value' => 10000,'peril' => 'flood','desc' => 'A flood at my home']),
        'StartDate ' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'RebuildCost ' => $faker->numberBetween($min = 500000, $max = 1000000),
        'CommonAreas ' => $faker->numberBetween($min = 25000, $max = 500000),
        'CurrentInsurer ' => $faker->company,
        'CurrentExcess ' => $faker->numberBetween($min = 0, $max = 500),
        'CurrentPremium ' => $faker->numberBetween($min = 100, $max = 1000),
        'SpecialTerms ' => 'Test',
        'EmployerLiability ' => 'No',
        'StaffNumber ' => $faker->randomDigit,
        'ERNExempt ' => 'No',
        'ERN ' => $faker->randomNumber($nbDigits = 7, $strict = false),
        'Engineering ' => 'No',
        'Terrorism ' => 'No',
        'DAndO ' => 'No',
        'IndemnityLevel ' =>'500000',
    ];
});