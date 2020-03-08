<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHierarchyWiseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hierarchy_wise_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('m_id')->nullable();
            $table->string('m_name')->nullable();
            $table->string('m_email')->nullable();
            $table->integer('rm_id')->nullable();
            $table->string('rm_name')->nullable();
            $table->string('rm_email')->nullable();
            $table->integer('asm_id')->nullable();
            $table->string('asm_name')->nullable();
            $table->string('asm_email')->nullable();
            $table->integer('e_id')->nullable();
            $table->string('e_name')->nullable();
            $table->string('e_email')->nullable();
            $table->integer('d_id')->nullable();
            $table->string('d_name')->nullable();
            $table->string('d_code')->nullable();
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
        Schema::dropIfExists('hierarchy_wise_products');
    }
}
