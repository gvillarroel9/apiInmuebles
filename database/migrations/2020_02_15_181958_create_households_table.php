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
            $table->string('property_type');
            $table->string('household_in');
            $table->integer('zone_id');
            $table->integer('rooms_number'); 
            $table->integer('bathrooms_number');  
            $table->integer('parking_numbers');
            $table->string('commodities');
            $table->string('services');
            $table->string('image');
            $table->string('video');
            $table->string('details'); 
            $table->string('proximity_services_transport'); 
            $table->string('location');
            $table->integer('price');
            $table->string('currency');   
            $table->string('contact_days');  
            $table->string('contact_name'); 
            $table->string('contact_last_name');  
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('init_hour');
            $table->string('finish_hour');
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
