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
        Schema::create('trx_pur_purchases', function (Blueprint $table) {
            $table->string('purchase_id')->primary();
            $table->string('supplier_id');
            $table->datetime('purchase_date');
            $table->decimal('total_amount', 8, 2);
            $table->timestamps();
            $table->softDeletes();
    
            $table->foreign('supplier_id')->references('supplier_id')->on('mst_pur_suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_pur_purchases');
    }
};
