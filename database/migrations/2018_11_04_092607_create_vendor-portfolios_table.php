<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorPortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('vendor_id');
            $table->string('name');
            $table->longText('description');
            $table->string('portfolio_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_portfolios');
    }
}
