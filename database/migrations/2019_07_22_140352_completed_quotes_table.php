<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompletedQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->string('Firstname');
            $table->string('MiddleInitials')->nullable();
            $table->string('Surname');
            $table->string('RelationshipToProposer');
            $table->string('RelationshipMoreInfo')->nullable();
            $table->string('Organisation')->nullable();
            $table->string('PhoneNumber');
            $table->string('Email');
            $table->string('CorrieNumber')->nullable();
            $table->string('CorrieFirstLine')->nullable();
            $table->string('CorrieSecondLine')->nullable();
            $table->string('CorrieCity')->nullable();
            $table->string('CorrieCounty')->nullable();
            $table->string('CorriePostCode')->nullable();
            $table->string('ProposerName');
            $table->string('RelationshipToProperty');
            $table->text('RelToPropMoreInfo')->nullable();
            $table->string('PreviousPolicy')->nullable();
            $table->string('PreviousPolicyNumber')->nullable();
            $table->string('CCJ');
            $table->string('Bankruptcy');
            $table->string('Declined');
            $table->string('Recovery');
            $table->string('Prosecuted');
            $table->string('Liquidated');
            $table->string('Disqualified');
            $table->string('Convictions');
            $table->text('StatementsMoreInfo')->nullable();
            $table->string('RiskNumber');
            $table->string('RiskFirstLine');
            $table->string('RiskSecondLine')->nullable();
            $table->string('RiskCity');
            $table->string('RiskCounty');
            $table->string('RiskPostCode');
            $table->string('InterestedParties')->nullable();
            $table->string('PropertyType');
            $table->string('BuildType')->nullable();
            $table->string('BuildTypeInfo')->nullable();
            $table->integer('NumFlats')->nullable();
            $table->integer('NumFlatsUnoccupied')->nullable();
            $table->string('ResiAreas')->nullable();
            $table->string('BusinessUse')->nullable();
            $table->integer('YearOfBuild');
            $table->string('GoodStateRepair');
            $table->string('StandardConstruction');
            $table->string('MajorWorks');
            $table->string('ListedStatus');
            $table->string('HMO')->nullable();
            $table->string('Unoccupied')->nullable();
            $table->text('RiskDetailsMoreInfo')->nullable();
            $table->integer('NumStoreys')->nullable();
            $table->integer('NumLifts')->nullable();
            $table->string('Sprinklers')->nullable();
            $table->string('PrevSubs');
            $table->string('PrevFlood');
            $table->text('FloodSubsMoreInfo')->nullable();
            $table->string('PrevClaims');
            $table->json('ClaimsDetails')->nullable();
            $table->date('StartDate');
            $table->string('RebuildCost');
            $table->string('CommonAreas');
            $table->string('LandlordSumInsured')->nullable();
            $table->string('CurrentInsurer')->nullable();
            $table->string('CurrentExcess')->nullable();
            $table->string('CurrentPremium')->nullable();
            $table->text('SpecialTerms')->nullable();
            $table->string('EmployerLiability')->default('No');
            $table->integer('HasStaff')->nullable();
            $table->string('ERNExempt')->default('No')->nullable();
            $table->string('ERN')->nullable();
            $table->string('Engineering')->default('No');
            $table->string('Terrorism')->default('No');
            $table->string('DAndO')->default('No');
            $table->string('IndemnityLevel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('completed_quotes');
    }
}
