<?php

use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('offices')->truncate();
        DB::table('offices')->insert(array(
            0 => array(
                    'id' => '1',
                    'code' => 'hcm',
                    'name_en' => "Ho Chi Minh City (Saigon)",
                    'name_vn' => "Tp Hồ Chí Minh (Sài Gòn)",
                    'desciption_en' => "",
                    'desciption_vn' => "",
                    'weight' => '10',
                ),
            1 => array(
                    'id' => '2',
                    'code' => 'pthiet',
                    'name_en' => "Mui Ne - Phan Thiet",
                    'name_vn' => "Mũi Né - Phan Thiết",
                    'desciption_en' => "",
                    'desciption_vn' => "",
                    'weight' => '20'
                ),
            2 => array(
                    'id' => '3',
                    'code' => 'nt',
                    'name_en' => "Nha Trang",
                    'name_vn' => "Nha Trang",
                    'desciption_en' => "",
                    'desciption_vn' => "",
                    'weight' => '30'
                ),

        ));
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
