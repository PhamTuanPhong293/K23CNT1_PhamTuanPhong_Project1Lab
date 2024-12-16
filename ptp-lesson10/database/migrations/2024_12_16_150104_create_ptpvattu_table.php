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
        Schema::create('ptpvattu', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ptpMaVTu')->primary();
            $table->string('ptpTenVTu')->unique();
            $table->string('ptpDVTinh');
            $table->float('ptpPhanTram');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptpvattu');
    }
};
