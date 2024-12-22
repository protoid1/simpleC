<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trx_pos_order_items', function (Blueprint $table) {
            $table->string('order_item_id')->primary();
            $table->string('order_id');
            $table->string('product_id');
            $table->integer('order_quantity');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('order_id')->references('order_id')->on('trx_pos_orders')->onDelete('cascade');
            $table->foreign('product_id')->references('product_id')->on('mst_pos_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_pos_order_items');
    }
};
