<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('em_id')->nullable();
            $table->string('em_name')->nullable();
            $table->string('em_email')->nullable();
            $table->string('position')->nullable();
            $table->string('number')->nullable();
            $table->string('code')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('address')->nullable();
            $table->string('date')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('p_o_number')->nullable();
            $table->string('project')->nullable();
            $table->longText('product_code')->nullable();
            $table->longText('product_name')->nullable();
            $table->longText('category')->nullable();
            $table->longText('price')->nullable();
            $table->longText('pieces')->nullable();
            $table->longText('total_price')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('commission')->nullable();
            $table->string('current_amount')->nullable();
            $table->string('old_outstanding')->nullable();
            $table->string('total_outstanding')->nullable();
            $table->longText('amount_writing_store')->nullable();
            $table->integer('permission')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
