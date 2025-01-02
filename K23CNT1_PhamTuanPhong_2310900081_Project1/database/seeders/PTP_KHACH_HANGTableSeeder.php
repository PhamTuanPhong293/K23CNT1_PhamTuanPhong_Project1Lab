<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PTP_KHACH_HANGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ptpMatKhau = md5("123456789");
        DB::table('PTP_KHACH_HANG')->insert([
            'ptpMaKhachHang' => 'KH001',
            'ptpHoTenKhachHang' => 'Phạm Tuấn Phong',
            'ptpDiaChi' => 'Hà Nội',
            'ptpDienThoai' => '0981907669',
            'ptpEmail' => 'phongpham29305@gmail.com',
            'ptpNgayDangKy' => '2024-12-31',
            'ptpMatKhau' => $ptpMatKhau,
            'ptpTrangThai' => 0,
        ]);
    }
}
