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
        Schema::create('trx_pos_orders', function (Blueprint $table) {
            $table->string('order_id')->primary();
            $table->string('customer_id');
            $table->datetime('order_date');
            $table->decimal('total_amount', 8, 2);
            $table->string('oder_status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('customer_id')->references('customer_id')->on('mst_pos_customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_pos_orders');
    }
};
