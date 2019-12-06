<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('service_id');
            $table->bigInteger('bidder_id');
            $table->integer('bidamount');
            $table->longText('biddes');
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
        Schema::dropIfExists('bid_infos');
    }
}
