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
        Schema::create('PTP_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('ptpMaHoaDon', 255)->unique();
            $table->bigInteger('ptpMaKhachHang')->references('id')->on('PTP_KHACH_HANG');
            $table->date('ptpNgayHoaDon');
            $table->string('ptpHoTenKhachHang', 255);
            $table->string('ptpEmail', 255);
            $table->string('ptpDienThoai', 255);
            $table->string('ptpDiaChi', 255);
            $table->float('ptpTongTriGia');
            $table->tinyInteger('ptpTrangThai');
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PTP_HOA_DON');
    }
};
