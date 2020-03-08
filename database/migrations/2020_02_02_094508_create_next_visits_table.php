<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNextVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('next_visits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('entry_id')->nullable();
            $table->integer('em_id')->nullable();
            $table->string('em_name')->nullable();
            $table->string('em_email')->nullable();
            $table->string('dealer_name')->nullable();
            $table->string('date')->nullable();
            $table->string('in_time')->nullable();
            $table->string('out_time')->nullable();
            $table->string('order_status')->nullable();
            $table->string('collection_status')->nullable();
            $table->string('mode_of_transport')->nullable();
            $table->string('distance_from_previous_station')->nullable();
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
        Schema::dropIfExists('next_visits');
    }
}
