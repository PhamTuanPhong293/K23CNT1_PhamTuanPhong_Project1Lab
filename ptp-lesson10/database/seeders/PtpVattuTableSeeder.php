<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PtpVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ptpvattu')->insert([
            'ptpMaVTu'=>'DD01',
            'ptpTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'ptpDvTinh'=>'Bộ',
            'ptpPhanTram'=>40,
            ]);
        DB::table('ptpvattu')->insert([
            'ptpMaVTu'=>'DD02',
            'ptpTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            'ptpDvTinh'=>'Bộ',
            'ptpPhanTram'=>50,
            ]);
    }
}
