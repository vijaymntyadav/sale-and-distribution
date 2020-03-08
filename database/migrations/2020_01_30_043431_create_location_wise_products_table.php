<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationWiseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_wise_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('postal_code')->nullable();
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
        Schema::dropIfExists('location_wise_products');
    }
}
