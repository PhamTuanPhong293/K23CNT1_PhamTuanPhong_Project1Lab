<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PTP_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("PTP_SAN_PHAM")->insert([
            'ptpMaSanPham'  => 'VP001',
            'ptpTenSanPham' => 'Cây phú quý',
            'ptpHinhAnh'    => 'images/san-pham/VP001.jpg',
            'ptpSoLuong'    => 100,
            'ptpDonGia'     => 699000,
            'ptpMaLoai'     => 1,
            'ptpTrangThai'  => 0
        ]);
        DB::table("PTP_SAN_PHAM")->insert([
            'ptpMaSanPham'  => 'VP002',
            'ptpTenSanPham' => 'Cây đại phú gia',
            'ptpHinhAnh'    => 'images/san-pham/VP002.jpg',
            'ptpSoLuong'    => 200,
            'ptpDonGia'     => 550000,
            'ptpMaLoai'     => 1,
            'ptpTrangThai'  => 0
        ]);
        DB::table("PTP_SAN_PHAM")->insert([
            'ptpMaSanPham'  => 'VP003',
            'ptpTenSanPham' => 'Cây hạnh phúc',
            'ptpHinhAnh'    => 'images/san-pham/VP003.jpg',
            'ptpSoLuong'    => 150,
            'ptpDonGia'     => 250000,
            'ptpMaLoai'     => 1,
            'ptpTrangThai'  => 0
        ]);
        DB::table("PTP_SAN_PHAM")->insert([
            'ptpMaSanPham'  => 'VP004',
            'ptpTenSanPham' => 'Cây vạn lộc',
            'ptpHinhAnh'    => 'images/san-pham/VP004.jpg',
            'ptpSoLuong'    => 300,
            'ptpDonGia'     => 799000,
            'ptpMaLoai'     => 1,
            'ptpTrangThai'  => 0
        ]);
        DB::table("PTP_SAN_PHAM")->insert([
            'ptpMaSanPham'  => 'PT001',
            'ptpTenSanPham' => 'Cây thiết mộc lan',
            'ptpHinhAnh'    => 'images/san-pham/PT001.jpg',
            'ptpSoLuong'    => 150,
            'ptpDonGia'     => 590000,
            'ptpMaLoai'     => 3,
            'ptpTrangThai'  => 0
        ]);
        DB::table("PTP_SAN_PHAM")->insert([
            'ptpMaSanPham'  => 'PT002',
            'ptpTenSanPham' => 'Cây trường sinh',
            'ptpHinhAnh'    => 'images/san-pham/PT002.jpg',
            'ptpSoLuong'    => 100,
            'ptpDonGia'     => 150000,
            'ptpMaLoai'     => 3,
            'ptpTrangThai'  => 0
        ]);
        DB::table("PTP_SAN_PHAM")->insert([
            'ptpMaSanPham'  => 'PT003',
            'ptpTenSanPham' => 'Cây hạnh phúc',
            'ptpHinhAnh'    => 'images/san-pham/PT003.jpg',
            'ptpSoLuong'    => 200,
            'ptpDonGia'     => 299000,
            'ptpMaLoai'     => 3,
            'ptpTrangThai'  => 0
        ]);
        DB::table("PTP_SAN_PHAM")->insert([
            'ptpMaSanPham'  => 'PT004',
            'ptpTenSanPham' => 'Cây hoa nhài (Lài ta)',
            'ptpHinhAnh'    => 'images/san-pham/PT004.jpg',
            'ptpSoLuong'    => 300,
            'ptpDonGia'     => 199000,
            'ptpMaLoai'     => 3,
            'ptpTrangThai'  => 0
        ]);
    }
}
