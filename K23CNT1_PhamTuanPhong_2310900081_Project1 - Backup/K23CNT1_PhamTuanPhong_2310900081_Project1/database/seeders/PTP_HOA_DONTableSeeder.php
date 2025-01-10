<?php

namespace Database\Seeders;

use App\Models\PTP_KHACH_HANG;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PTP_HOA_DONTableSeeder extends Seeder
{
    public function run(): void
    {
    
        DB::table('PTP_HOA_DON')->insert([
            [
                'ptpMaHoaDon' => 'HD001',
                'ptpMaKhachHang' => 'KH001',
                'ptpNgayHoaDon' => '2024-12-31',
                'ptpHotenKhachHang' => 'Phạm Tuấn Phong',
                'ptpEmail' => 'phongpham29305@gmail.com',
                'ptpDienThoai' => '0981907669',
                'ptpDiaChi' => 'Hà Nội',
                'ptpTongTriGia'=> 100000,
                'ptpTrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
