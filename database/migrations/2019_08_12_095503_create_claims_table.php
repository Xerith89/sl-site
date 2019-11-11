<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('PhoneNumber');
            $table->string('SecondPhoneNumber');
            $table->string('Email');
            $table->string('SpecificationNumber');
            $table->text('RiskAddress');
            $table->string('InsuredName');
            $table->string('DamageCause');
            $table->text('Damage');
            $table->string('InformedBy')->nullable();
            $table->date('DateAdvised')->nullable();
            $table->string('TradesmanName')->nullable();
            $table->date('DateEstimatesReceived')->nullable();
            $table->string('PoliceAdvised')->nullable();
            $table->date('DatePoliceAdvised')->nullable();
            $table->string('CrimeNumber')->nullable();
            $table->string('OfficerStationDealing')->nullable();
            $table->string('RecoverVAT');
            $table->string('NotifyBroker')->nullable();
            $table->string('SettlementPayee');
            $table->text('ChequeAddress');
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
        Schema::dropIfExists('claims');
    }
}
