<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PTP_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('PTP_LOAI_SAN_PHAM')->insert([
            'ptpMaLoai' => 'L001',
            'ptpTenLoai'=> 'Cây cảnh văn phòng',
            'ptpTrangThai'=> 0,
        ]);
        DB::table('PTP_LOAI_SAN_PHAM')->insert([
            'ptpMaLoai' => 'L002',
            'ptpTenLoai'=> 'Cây để bàn',
            'ptpTrangThai'=> 0,
        ]);
        DB::table('PTP_LOAI_SAN_PHAM')->insert([
            'ptpMaLoai' => 'L003',
            'ptpTenLoai'=> 'Cây cảnh phong thủy',
            'ptpTrangThai'=> 0,
        ]);
        DB::table('PTP_LOAI_SAN_PHAM')->insert([
            'ptpMaLoai' => 'L004',
            'ptpTenLoai'=> 'Cây thủy canh',
            'ptpTrangThai'=> 0,
        ]);
    }
}
