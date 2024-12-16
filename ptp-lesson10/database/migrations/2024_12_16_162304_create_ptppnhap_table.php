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
        Schema::create('ptppnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('ptpSoPN')->primary();
            $table->date('ptpNgayNhap');
            $table->string('ptpSoDH');
            //khoa ngoai
            $table->foreign('ptpSoDH')->references('ptpSoDH')->on('ptpdondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptppnhap');
    }
};
