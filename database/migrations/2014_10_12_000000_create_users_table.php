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
            $table->integer('contact')->nullable();
            $table->integer('contact_social')->nullable();
            $table->string('other_contact')->nullable();
            $table->unsignedInteger('country_id')->nullable();            
            $table->boolean('local_phone')->nullable();
            $table->string('phone');
            $table->boolean('company_user')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_rif')->nullable();
            $table->string('company_country_id')->nullable();
            $table->string('company_city_id')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_rep_name')->nullable();
            $table->string('company_rep_email')->nullable();
            $table->integer('language')->nullable();
            $table->integer('info_frequency')->nullable();
            $table->string('info_interests')->nullable();
            $table->string('info_email')->nullable();
            $table->string('info_social')->nullable();
            $table->string('info_phone')->nullable();
            $table->string('info_facebook')->nullable();
            $table->string('info_others')->nullable();
            $table->boolean('service_interest')->nullable();
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('user_email')->nullable();
            $table->string('email');
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
