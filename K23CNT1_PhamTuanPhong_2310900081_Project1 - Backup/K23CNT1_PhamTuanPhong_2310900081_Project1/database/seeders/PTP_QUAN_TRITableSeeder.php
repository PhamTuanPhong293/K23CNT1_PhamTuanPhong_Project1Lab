<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PTP_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ptpMatKhau = md5("123456789");
        DB::table('PTP_QUAN_TRI')->insert([
            'ptpTaiKhoan'=>'phongpham@gmail.com',
            'ptpMatKhau'=> $ptpMatKhau,
            'ptpTrangThai'=> 0
        ]);
        DB::table('PTP_QUAN_TRI')->insert([
            'ptpTaiKhoan'=>'0981907669',
            'ptpMatKhau'=> $ptpMatKhau,
            'ptpTrangThai'=> 0
        ]);
    }
}
