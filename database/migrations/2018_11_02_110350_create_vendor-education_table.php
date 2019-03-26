<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('vendor_id');
            $table->string('institute');
            $table->string('degree_diploma');
            $table->string('year_start');
            $table->string('year_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendorEducation');
    }
}
