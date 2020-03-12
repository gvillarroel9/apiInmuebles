<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseholdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('households', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('propertyType');
            $table->integer('household_in');
            $table->integer('zoneId');
            $table->integer('roomsNumber');
            $table->integer('bathroomsNumber');
            $table->integer('parkingNumbers');
            $table->string('details');
            $table->string('proximityServicesTransport');
            $table->string('location');
            $table->integer('price');
            $table->integer('idCurrency');
            $table->integer('initHour');
            $table->integer('finishHour');
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
        Schema::dropIfExists('households');
    }
}
