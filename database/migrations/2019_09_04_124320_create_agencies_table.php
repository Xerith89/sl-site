<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ApplicantName');
            $table->string('ApplicantPosition');
            $table->string('CompanyName');
            $table->string('CompanyEmail');
            $table->string('CompanyTel');
            $table->string('CompanyFax')->nullable();
            $table->string('CompanyWebsite')->nullable();
            $table->string('BusinessType');
            $table->string('FirstApplicantName')->nullable();
            $table->text('FirstApplicantAddress')->nullable();
            $table->boolean('FirstApplicantHomeOwner')->nullable();
            $table->string('SecondApplicantName')->nullable();
            $table->text('SecondApplicantAddress')->nullable();
            $table->boolean('SecondApplicantHomeOwner')->nullable();
            $table->text('TradingAddress');
            $table->date('EstablishedDate');
            $table->date('FinancialYearEnd');
            $table->string('CompanyRegNo');
            $table->boolean('FCAAuth')->nullable();
            $table->boolean('AppointedRep')->nullable();
            $table->string('PrincipalName')->nullable();
            $table->string('PrincipalTelNo')->nullable();
            $table->text('PrincipalAddress')->nullable();
            $table->string('FCAFirmRef')->nullable();
            $table->string('IndemInsurer');
            $table->string('IndemPolicyNumber');
            $table->date('IndemRenewalDate');
            $table->string('IndemLimit');
            $table->string('IndemExcess');
            $table->boolean('CriminalConvictions');
            $table->text('CriminalConvictionsInfo')->nullable();
            $table->boolean('AgencyTerminated');
            $table->text('AgencyTerminatedInfo')->nullable();
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
        Schema::dropIfExists('agencies');
    }
}
