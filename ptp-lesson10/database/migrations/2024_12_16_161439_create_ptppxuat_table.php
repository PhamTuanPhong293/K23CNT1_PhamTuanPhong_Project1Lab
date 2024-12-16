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
        Schema::create('ptppxuat', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ptpSoXP')->primary();
            $table->date('ptpNgayXuat');
            $table->string('ptpTenKH',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptppxuat');
    }
};
