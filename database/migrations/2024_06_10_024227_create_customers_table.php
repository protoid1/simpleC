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
        Schema::create('mst_pos_customers', function (Blueprint $table) {
            $table->string('customer_id')->primary();
            $table->string('customer_name');
            $table->string('customer_email')->unique();
            $table->string('customer_phone');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_pos_customers');
    }
};
