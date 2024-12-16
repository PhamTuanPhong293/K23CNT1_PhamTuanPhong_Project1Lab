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
        Schema::create('ptpdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ptpSoDH')->primary();
            $table->date('ptpNgayDH');
            $table->string('ptpMaNCC');
            $table->foreign('ptpMaNCC')->references('ptpMaNCC')->on('ptpnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptpdondh');
    }
};
