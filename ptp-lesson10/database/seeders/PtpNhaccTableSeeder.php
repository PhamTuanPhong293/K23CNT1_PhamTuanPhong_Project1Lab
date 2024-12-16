<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PtpNhaccTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
            foreach(range(1,100) as $index)
            {
                DB::table('ptpnhacc')->insert([
                    'ptpMaNCC'=>$faker->uuid(),
                    // 'MaNCC'=>$faker->word(15),
                    'ptpTenNCC'=>$faker->sentence(5),
                    'ptpDiachi'=>$faker->address(),
                    'ptpDienthoai'=>$faker->phoneNumber(10),
                    'ptpemail'=>$faker->email(),
                    'ptpstatus'=>$faker->boolean()
                    ]);
            }
    }
}
