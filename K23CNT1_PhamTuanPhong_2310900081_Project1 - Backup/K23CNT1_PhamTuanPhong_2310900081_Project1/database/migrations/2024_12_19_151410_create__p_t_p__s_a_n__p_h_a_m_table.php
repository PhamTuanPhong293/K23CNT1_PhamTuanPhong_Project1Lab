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
        Schema::create('PTP_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('ptpMaSanPham', 255)->unique();
            $table->string('ptpTenSanPham', 255);
            $table->string('ptpHinhAnh', 255);
            $table->integer('ptpSoLuong');
            $table->float('ptpDonGia');
            $table->bigInteger('ptpMaLoai')->references('id')->on('PTP_LOAI_SAN_PHAM');
            $table->tinyInteger('ptpTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PTP_SAN_PHAM');
    }
};
