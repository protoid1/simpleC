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
        Schema::create('trx_csh_transactions', function (Blueprint $table) {
            $table->string('transaction_id')->primary();
            $table->string('order_id');
            $table->string('employee_id');
            $table->datetime('transaction_date');
            $table->decimal('total_amount', 12, 2);
            $table->timestamps();
            $table->softDeletes();
    
            $table->foreign('order_id')->references('order_id')->on('trx_pos_orders')->onDelete('cascade');
            $table->foreign('employee_id')->references('employee_id')->on('mst_employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_csh_transactions');
    }
};
