<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

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
        $faker = Faker::create();
            foreach(range(1,50) as $index)
            {
                DB::table('ptpvattu')->insert([
                    'ptpMaVTu'=>$faker->word(4),
                    // 'MaNCC'=>$faker->word(15),
                    'ptpTenVTu'=>$faker->sentence(5),
                    'ptpDvTinh'=>$faker->word(3),
                    'ptpPhanTram'=>$faker->randomFloat('2',0,100)
                    ]);
            }
    }
}
