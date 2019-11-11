<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatedClaims extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updated_claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('PolicyholderName');
            $table->string('PolicyholderEmail');
            $table->string('PolicyholderPostCode');
            $table->string('PolicyholderComments');
            $table->string('ClaimNumber');
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
        Schema::dropIfExists('updated_claims');
    }
}
