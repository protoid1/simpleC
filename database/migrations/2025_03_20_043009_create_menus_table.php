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
        Schema::create('mst_menus', function (Blueprint $table) {
            $table->id('id');
            $table->string('menu_name');
            $table->string('menu_price')->nullable();
            $table->string('menu_image')->nullable();
            $table->integer('menu_stock')->nullable();
            $table->string('menu_status')->nullable();
            $table->string('created_id')->nullable();
            $table->string('updated_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
