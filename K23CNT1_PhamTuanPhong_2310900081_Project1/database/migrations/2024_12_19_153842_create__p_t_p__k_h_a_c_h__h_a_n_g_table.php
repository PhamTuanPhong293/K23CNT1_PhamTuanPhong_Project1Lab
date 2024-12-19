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
        Schema::create('PTP_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('ptpMaKhachHang', 255)->unique();
            $table->string('ptpHoTenKhachHang', 255);
            $table->string('ptpEmail', 255);
            $table->string('ptpMatKhau', 255);
            $table->string('ptpDienThoai', 255);
            $table->string('ptpDiaChi', 255);
            $table->date('ptpNgayDangKy');
            $table->tinyInteger('ptpTrangThai');
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PTP_KHACH_HANG');
    }
};
