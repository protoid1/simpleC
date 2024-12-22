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
        Schema::create('trx_fin_payments', function (Blueprint $table) {
            $table->string('payment_id')->primary();
            $table->string('transaction_id');
            $table->datetime('payment_date');
            $table->decimal('payment_amount', 12, 2);
            $table->string('payment_method');
            $table->timestamps();
            $table->softDeletes();
    
            $table->foreign('transaction_id')->references('transaction_id')->on('trx_csh_transactions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_fin_payments');
    }
};
