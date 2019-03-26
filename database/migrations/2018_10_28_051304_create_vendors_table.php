<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('status')->default('0');
            $table->integer('verification_status')->default('0');
            $table->integer('number_verification_status')->default('0');
            $table->integer('email_verification_status')->default('0');
            $table->integer('company_verification_status')->default('0');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            // #############################################################################
            //  in actual development remove nullable() from below columns
            // #############################################################################
            $table->string('position')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('working_radius')->nullable();
            $table->string('working_time_start')->nullable();
            $table->string('working_time_end')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('CNIC')->nullable();
            $table->string('call_appointment_date')->nullable();
            // #############################################################################
            //  in actual development remove nullable() from above columns
            // #############################################################################
            $table->string('profile_img')->nullable();
            $table->string('birthday')->nullable();
            $table->string('nationality')->nullable();
            $table->string('marital')->nullable();
            $table->string('skype_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('linkedin_id')->nullable();
            $table->longText('bio')->nullable();
            $table->string('company_image')->nullable();
            $table->string('company_name')->nullable();
            $table->longText('company_description')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_contact')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
