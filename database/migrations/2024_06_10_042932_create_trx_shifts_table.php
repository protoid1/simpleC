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
        Schema::create('trx_shifts', function (Blueprint $table) {
            $table->string('shift_id')->primary();
            $table->string('employee_id');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('employee_id')->references('employee_id')->on('mst_employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_shifts');
    }
};
