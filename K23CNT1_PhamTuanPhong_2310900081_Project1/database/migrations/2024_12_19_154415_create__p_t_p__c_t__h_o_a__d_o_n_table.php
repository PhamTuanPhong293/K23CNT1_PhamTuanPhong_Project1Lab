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
        Schema::create('PTP_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ptpHoaDonID')->references('id')->on('PTP_HOA_DON');
            $table->bigInteger('ptpSanPhamID')->references('id')->on('PTP_SAN_PHAM');
            $table->integer('ptpSoLuongMua');
            $table->float('ptpDonGiaMua');
            $table->float('ptpThanhTien');
            $table->tinyInteger('ptpTrangThai');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PTP_CT_HOA_DON');
    }
};
