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
        Schema::create('mst_employees', function (Blueprint $table) {
            $table->string('employee_id')->primary();
            $table->string('employee_name')->nullable();
            $table->string('employee_email')->unique();
            $table->string('employee_password');
            $table->string('employee_phone')->nullable();
            $table->string('employee_role')->nullable();
            $table->string('employee_unit')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('employee_remember_token')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_employees');
    }
};
