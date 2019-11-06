<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_tender_name');
            $table->longText('service_tender_description')->nullable();
            $table->string('service_tender_quantity');
            $table->string('service_tender_any_price')->nullable();
            $table->string('service_image')->nullable();
            $table->string('service_tender_area')->nullable();
            $table->string('category_name_id')->nullable();
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
        Schema::dropIfExists('services');
    }
}
