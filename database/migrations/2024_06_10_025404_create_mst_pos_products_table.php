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
        Schema::create('mst_pos_products', function (Blueprint $table) {
            $table->string('product_id')->primary();
            $table->string('product_name');
            $table->text('product_description');
            $table->decimal('product_price', 8, 2);
            $table->integer('product_stock');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_pos_products');
    }
};
