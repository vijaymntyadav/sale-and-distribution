<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductWiseSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_wise_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('product_code')->nullable();
            $table->longText('product_name')->nullable();
            $table->longText('category')->nullable();
            $table->longText('price')->nullable();
            $table->longText('pieces')->nullable();
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
        Schema::dropIfExists('product_wise_sales');
    }
}
