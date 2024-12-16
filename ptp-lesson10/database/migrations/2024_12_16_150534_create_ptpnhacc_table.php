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
        Schema::create('ptpnhacc', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ptpMaNCC')->primary();
            $table->string('ptpTenNCC');
            $table->string('ptpDiachi');
            $table->string('ptpDienthoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptpnhacc');
    }
};
