<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PTP_SAN_PHAM extends Model
{
    use HasFactory;

    // Khai báo bảng liên kết với model
    protected $table = "PTP_SAN_PHAM";
    protected $fillable = [
        'ptpMaSanPham',
        'ptpTenSanPham',
        'ptpHinhAnh',
        'ptpSoLuong',
        'ptpDonGia',
        'ptpMaLoai',
        'ptpTrangThai',
    ];
    
}
