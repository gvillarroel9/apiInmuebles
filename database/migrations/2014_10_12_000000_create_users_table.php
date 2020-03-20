<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('dni');
            $table->integer('contact');
            $table->integer('contact_social');
            $table->string('other_contact');
            $table->unsignedInteger('country_id');            
            $table->boolean('local_phone');
            $table->string('phone');
            $table->boolean('company_user');
            $table->string('company_name');
            $table->string('company_rif');
            $table->string('company_country_id');
            $table->string('company_city_id');
            $table->string('company_address');
            $table->string('company_rep_name');
            $table->string('company_rep_email');
            $table->integer('language');
            $table->integer('info_frequency');
            $table->string('info_interests');
            $table->string('info_email');
            $table->string('info_social');
            $table->string('info_phone');
            $table->string('info_facebook');
            $table->string('info_others');
            $table->boolean('service_interest');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('user_email');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            //$table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
