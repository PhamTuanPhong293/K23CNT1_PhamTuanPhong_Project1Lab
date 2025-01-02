<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PTP_CT_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('PTP_CT_HOA_DON')->insert([
            [
            'ptpHoaDonID' => 'HD001',
            'ptpSanPhamID' => 'VP001',
            'ptpSoLuongMua'=> 1,
            'ptpDonGiaMua'=> 100000,
            'ptpThanhTien'=> 100000,
            'ptpTrangThai'=> true,
            ],
        ]);
    }
}
