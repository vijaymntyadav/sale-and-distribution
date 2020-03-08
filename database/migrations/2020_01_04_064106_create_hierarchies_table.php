<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHierarchiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hierarchies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('manager_id');
            $table->string('manager_email');
            $table->string('manager_name');
            $table->string('regional_manager_id')->nullable();
            $table->string('regional_manager_name')->nullable();
            $table->string('regional_manager_email')->nullable();
            $table->string('area_sales_manager_id')->nullable();
            $table->string('area_sales_manager_email')->nullable();
            $table->string('area_sales_manager_name')->nullable();
            $table->string('executive_id')->nullable();
            $table->string('executive_email')->nullable();
            $table->string('executive_name')->nullable();
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
        Schema::dropIfExists('hierarchies');
    }
}
