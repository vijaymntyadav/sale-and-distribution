<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprovedSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approved_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sale_id')->nullable();
            $table->integer('em_id')->nullable();
            $table->string('em_name')->nullable();
            $table->string('em_email')->nullable();
            $table->string('position')->nullable();
            $table->string('challan_no')->nullable();
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
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('number')->nullable();
            $table->string('code')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('address')->nullable();
            $table->string('date')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('p_o_number')->nullable();
            $table->longText('product_code')->nullable();
            $table->longText('product_name')->nullable();
            $table->longText('category')->nullable();
            $table->longText('price')->nullable();
            $table->longText('pieces')->nullable();
            $table->string('pieces_total')->nullable();
            $table->longText('total_price')->nullable();
            $table->longText('add_pieces')->nullable();
            $table->longText('add_pieces_total_price')->nullable();
            $table->string('sum_of_add_pieces_total_price')->nullable();
            $table->longText('add_pieces_total')->nullable();
            $table->longText('final_total_pieces')->nullable();
            $table->string('amount_of_total_pieces')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('commission')->nullable();
            $table->string('current_amount')->nullable();
            $table->string('old_outstanding')->nullable();
            $table->string('total_outstanding')->nullable();
            $table->longText('amount_writing_store')->nullable();
            $table->longText('final_total_price')->nullable();
            $table->string('amount_of_total_price')->nullable();
            $table->string('amount_of_current_amount')->nullable();
            $table->string('amount_of_total_outstanding')->nullable();
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
        Schema::dropIfExists('approved_sales');
    }
}
