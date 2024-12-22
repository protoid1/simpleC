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
        Schema::create('mst_pur_supplier_products', function (Blueprint $table) {
            $table->string('supplier_product_id')->primary();
            $table->string('supplier_id');
            $table->string('product_id');
            $table->decimal('cost_price', 12, 2);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('supplier_id')->references('supplier_id')->on('mst_pur_suppliers')->onDelete('cascade');
            $table->foreign('product_id')->references('product_id')->on('mst_pos_products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_pur_supplier_products');
    }
};
