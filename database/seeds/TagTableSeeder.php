<?php

use Illuminate\Database\Seeder;

class TaggTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tags')->truncate();
        DB::table('tags')->insert(array(
                0 =>
                array(
                    'id' => '1',
                    'tagname' => 'hanoi',
                    'tag_en' => "Ha Noi",
                    'tag_vn' => "Hà Nội",
                    'category' => '1;10',
                    'order' => '1'
                ),
                1 =>
                array(
                    'id' => '2',
                    'tagname' => 'saigon',
                    'tag_en' => "Saigon",
                    'tag_vn' => "Sài Gòn",
                    'category' => '1;9;17',
                    'order' => '2'
                ),
                2 =>
                array(
                    'id' => '3',
                    'tagname' => 'hcm',
                    'tag_en' => "Hochiminh City",
                    'tag_vn' => "Tp Hồ Chí Minh",
                    'category' => '1;9;17',
                    'order' => '2'
                ),
                3 =>
                array(
                    'id' => '4',
                    'tagname' => 'cangio',
                    'tag_en' => "Can Gio",
                    'tag_vn' => "Cần Giờ",
                    'category' => '1;9;17',
                    'order' => '2'
                ),
                4 =>
                array(
                    'id' => '5',
                    'tagname' => 'tayninh',
                    'tag_en' => "Tay Ninh",
                    'tag_vn' => "Tây Ninh",
                    'category' => '1;17',
                    'order' => '3'
                ),
                5 =>
                array(
                    'id' => '6',
                    'tagname' => 'baden',
                    'tag_en' => "Ba Den Moutain",
                    'tag_vn' => "Núi Bà Đen",
                    'category' => '1;17',
                    'order' => '3'
                ),
                6 =>
                array(
                    'id' => '7',
                    'tagname' => 'phuquoc',
                    'tag_en' => "Phu Quoc Island",
                    'tag_vn' => "Phú Quốc",
                    'category' => '1;17;20',
                    'order' => '4'
                ),
                7 =>
                array(
                    'id' => '8',
                    'tagname' => 'vungtau',
                    'tag_en' => "Vung Tau",
                    'tag_vn' => "Vũng Tàu",
                    'category' => '1;17;28',
                    'order' => '5'
                ),
                8 =>
                array(
                    'id' => '9',
                    'tagname' => 'nhatrang',
                    'tag_en' => "Nha Trang",
                    'tag_vn' => "NhaTrang",
                    'category' => '1;18;37',
                    'order' => '6'
                ),
                9 =>
                array(
                    'id' => '10',
                    'tagname' => 'vinpeal',
                    'tag_en' => "Vinpeal Island",
                    'tag_vn' => "Vinpeal Nha Trang",
                    'category' => '1;18;37',
                    'order' => '6'
                ),
            ));
    }
}

