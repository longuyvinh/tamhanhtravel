<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('category')->truncate();

        DB::table('category')->insert(array(
            0 =>
            array(
                'id' => '1',
                'name_vn' => 'du lịch',
                'name_en' => 'tours',
                'description' => 'Quản lý các tour du lịch',
                'idparent' => '0',
                'status' => 1
            ),
            1 =>
            array(
                'id' => '2',
                'name_vn' => 'khách sạn',
                'name_en' => 'hotels',
                'description' => 'Quản lý khách san',
                'idparent' => '0',
                'status' => 1
            ),
            2 =>
            array(
                'id' => '3',
                'name_vn' => 'tin tức',
                'name_en' => 'news',
                'description' => 'Quản lý tin tức',
                'idparent' => '0',
                'status' => 1
            ),
            3 =>
            array(
                'id' => '4',
                'name_vn' => 'cẩm nang du lịch',
                'name_en' => 'tour tutorials',
                'description' => 'Những bí kíp khi đi du lịch',
                'idparent' => '0',
                'status' => 1
            ),
            4 =>
            array(
                'id' => '5',
                'name_vn' => 'danh lam thắng cảnh',
                'name_en' => 'wel-know place',
                'description' => 'Quản lý các danh lam thắng cảnh trong và ngoài nước',
                'idparent' => '0',
                'status' => 1
            ),
            5 =>
            array(
                'id' => '6',
                'name_vn' => 'du lịch trong ngày',
                'name_en' => 'vietnam daily tour',
                'description' => 'Quản lý các gói du lịch việt trong ngày',
                'idparent' => '1',
                'status' => 1
            ),
            6 =>
            array(
                'id' => '7',
                'name_vn' => 'du lịch trọn gói',
                'name_en' => 'vietnam package tour',
                'description' => 'Quản lý các gói du lịch việt dài ngày',
                'idparent' => '1',
                'status' => 1
            ),
            7 =>
            array(
                'id' => '8',
                'name_vn' => 'du lịch nước ngoài',
                'name_en' => 'outbound tours',
                'description' => 'Các tour du lịch châu á',
                'idparent' => '1',
                'status' => 1
            ),
            8 =>
            array(
                'id' => '9',
                'name_vn' => 'du lịch Sài Gòn',
                'name_en' => 'Saigon tours',
                'description' => 'quan lý tour saigon trong ngày',
                'idparent' => '6',
                'status' => 1
            ),
            9 =>
            array(
                'id' => '10',
                'name_vn' => 'du lịch Hà Nội',
                'name_en' => 'Hanoi tours',
                'description' => 'quan lý tour saigon trong ngày',
                'idparent' => '6',
                'status' => 1
            ),
            10 =>
            array(
                'id' => '11',
                'name_vn' => 'du lịch đồng bằng sông Cửu Long',
                'name_en' => 'Mekong tours',
                'description' => 'quan lý tour miền tây trong ngày',
                'idparent' => '6',
                'status' => 1
            ),
            11 =>
            array(
                'id' => '12',
                'name_vn' => 'du lịch Mũi Né',
                'name_en' => 'Muine tours',
                'description' => 'quan lý tour mũi né trong ngày',
                'idparent' => '6',
                'status' => 1
            ),
            12 =>
            array(
                'id' => '13',
                'name_vn' => 'du lịch Đà Lạt',
                'name_en' => 'Dalat tours',
                'description' => 'quan lý tour đà lạt trong ngày',
                'idparent' => '6',
                'status' => 1
            ),
            13 =>
            array(
                'id' => '14',
                'name_vn' => 'du lịch Nha Trang',
                'name_en' => 'Nhatrang tours',
                'description' => 'quan lý tour nha trang trong ngày',
                'idparent' => '6',
                'status' => 1
            ),
            14 =>
            array(
                'id' => '15',
                'name_vn' => 'du lịch Huế & Hội An',
                'name_en' => 'Hue & Hoian tours',
                'description' => 'quan lý tour huế và hội an trong ngày',
                'idparent' => '6',
                'status' => 1
            ),
            15 =>
            array(
                'id' => '16',
                'name_vn' => 'du lịch Sapa',
                'name_en' => 'Sapa tours',
                'description' => 'quan lý tour sapa trong ngày',
                'idparent' => '6',
                'status' => 1
            ),
            16 =>
            array(
                'id' => '17',
                'name_vn' => 'du lịch Miền Nam',
                'name_en' => 'South tours',
                'description' => 'quan lý gói du lịch miền nam',
                'idparent' => '7',
                'status' => 1
            ),
            17 =>
            array(
                'id' => '18',
                'name_vn' => 'du lịch Miền Trung',
                'name_en' => 'Center tours',
                'description' => 'quan lý gói du lịch miền trung',
                'idparent' => '7',
                'status' => 1
            ),
            18 =>
            array(
                'id' => '19',
                'name_vn' => 'du lịch Miền Bắc',
                'name_en' => 'North tours',
                'description' => 'quan lý gói du lịch miền bắc',
                'idparent' => '7',
                'status' => 1
            ),
            19 =>
            array(
                'id' => '20',
                'name_vn' => 'du lịch Phú Quốc',
                'name_en' => 'Phuquoc Island tours',
                'description' => 'quan lý tour phú quốc',
                'idparent' => '17',
                'status' => 1
            ),
            20 =>
            array(
                'id' => '21',
                'name_vn' => 'du lịch Côn Đảo',
                'name_en' => 'Condao tours',
                'description' => 'quan lý tour côn đảo',
                'idparent' => '17',
                'status' => 1
            ),
            21 =>
            array(
                'id' => '22',
                'name_vn' => 'du lịch Miền Tây',
                'name_en' => 'Mekong tours',
                'description' => 'quan lý tour miền tây',
                'idparent' => '17',
                'status' => 1
            ),
            22 =>
            array(
                'id' => '23',
                'name_vn' => 'du lịch Cần Thơ',
                'name_en' => 'Cantho tours',
                'description' => 'quan lý tour cần thơ',
                'idparent' => '17',
                'status' => 1
            ),
            23 =>
            array(
                'id' => '24',
                'name_vn' => 'du lịch An Giang',
                'name_en' => 'Angiang tours',
                'description' => 'quan lý tour an giang',
                'idparent' => '17',
                'status' => 1
            ),
            24 =>
            array(
                'id' => '25',
                'name_vn' => 'du lịch Tiền Giang',
                'name_en' => 'Tiengiang tours',
                'description' => 'quan lý tour Tiền Giang',
                'idparent' => '17',
                'status' => 1
            ),
            25 =>
            array(
                'id' => '26',
                'name_vn' => 'du lịch Vĩnh Long',
                'name_en' => 'Vinhlong tours',
                'description' => 'quan lý tour vĩnh long',
                'idparent' => '17',
                'status' => 1
            ),
            26 =>
            array(
                'id' => '27',
                'name_vn' => 'du lịch Đồng Nai',
                'name_en' => 'Dongnai tours',
                'description' => 'quan lý tour đồng nai',
                'idparent' => '17',
                'status' => 1
            ),
            27 =>
            array(
                'id' => '28',
                'name_vn' => 'du lịch Vũng Tàu',
                'name_en' => 'Vungtau tours',
                'description' => 'quan lý tour vũng tàu',
                'idparent' => '17',
                'status' => 1
            ),
            28 =>
            array(
                'id' => '29',
                'name_vn' => 'du lịch Đà Nẵng',
                'name_en' => 'Danang tours',
                'description' => 'quan lý tour đà nẵng',
                'idparent' => '18',
                'status' => 1
            ),
            29 =>
            array(
                'id' => '30',
                'name_vn' => 'du lịch Hội An',
                'name_en' => 'Hoian tours',
                'description' => 'quan lý tour hội an',
                'idparent' => '18',
                'status' => 1
            ),
            30 =>
            array(
                'id' => '31',
                'name_vn' => 'du lịch Ninh Thuận',
                'name_en' => 'Ninhthuan tours',
                'description' => 'quan lý tour ninh thuận',
                'idparent' => '18',
                'status' => 1
            ),
            31 =>
            array(
                'id' => '32',
                'name_vn' => 'du lịch Phan Thiết',
                'name_en' => 'Phanthiet tours',
                'description' => 'quan lý tour phan thiet',
                'idparent' => '18',
                'status' => 1
            ),
            32 =>
            array(
                'id' => '33',
                'name_vn' => 'du lịch Phú Yên',
                'name_en' => 'Hue & Hoian tours',
                'description' => 'quan lý tour huế và hội an trong ngày',
                'idparent' => '18',
                'status' => 1
            ),
            33 =>
            array(
                'id' => '34',
                'name_vn' => 'du lịch Quảng Bình',
                'name_en' => 'Quangbinh tours',
                'description' => 'quan lý tour Quảng Bình',
                'idparent' => '18',
                'status' => 1
            ),
            34 =>
            array(
                'id' => '35',
                'name_vn' => 'du lịch Quảng Nam',
                'name_en' => 'Quangnam tours',
                'description' => 'quan lý tour quảng nam',
                'idparent' => '18',
                'status' => 1
            ),
            35 =>
            array(
                'id' => '36',
                'name_vn' => 'du lịch Huế',
                'name_en' => 'Hue tours',
                'description' => 'quan lý tour huế',
                'idparent' => '18',
                'status' => 1
            ),
            36 =>
            array(
                'id' => '37',
                'name_vn' => 'du lịch Nha trang',
                'name_en' => 'Nhatrang tours',
                'description' => 'quan lý tour Nha trang',
                'idparent' => '18',
                'status' => 1
            ),
            37 =>
            array(
                'id' => '38',
                'name_vn' => 'du lịch Đà Lạt',
                'name_en' => 'Dalat tours',
                'description' => 'quan lý tour Đà Lạt',
                'idparent' => '18',
                'status' => 1
            ),
            38 =>
            array(
                'id' => '39',
                'name_vn' => 'du lịch Buôn Mê Thuột',
                'name_en' => 'Buonmethuot tours',
                'description' => 'quan lý tour buôn mê thuột',
                'idparent' => '18',
                'status' => 1
            ),
            39 =>
            array(
                'id' => '40',
                'name_vn' => 'du lịch Pleiku',
                'name_en' => 'Pleiku tours',
                'description' => 'quan lý tour Pleiku',
                'idparent' => '18',
                'status' => 1
            ),
            40 =>
            array(
                'id' => '41',
                'name_vn' => 'du lịch Tây Nguyên',
                'name_en' => 'Taynguyen tours',
                'description' => 'quan lý tour Tây Nguyên',
                'idparent' => '18',
                'status' => 1
            ),
            41 =>
            array(
                'id' => '42',
                'name_vn' => 'du lịch Đông Bắc',
                'name_en' => 'East North tours',
                'description' => 'quan lý tour đông bắc',
                'idparent' => '19',
                'status' => 1
            ),
            42 =>
            array(
                'id' => '43',
                'name_vn' => 'du lịch Tây Bắc',
                'name_en' => 'West North tours',
                'description' => 'quan lý tour tây bắc',
                'idparent' => '19',
                'status' => 1
            ),
            43 =>
            array(
                'id' => '44',
                'name_vn' => 'du lịch Hà Nội',
                'name_en' => 'Hanoi tours',
                'description' => 'quan lý tour hà nội',
                'idparent' => '19',
                'status' => 1
            ),
            44 =>
            array(
                'id' => '45',
                'name_vn' => 'du lịch Ninh Bình',
                'name_en' => 'Ninh Bình tours',
                'description' => 'quan lý tour Ninh Bình',
                'idparent' => '19',
                'status' => 1
            ),
            45 =>
            array(
                'id' => '46',
                'name_vn' => 'du lịch Vịnh Hạ Long',
                'name_en' => 'Halong bay tours',
                'description' => 'quan lý tour vịnh hạ long',
                'idparent' => '19',
                'status' => 1
            ),
            46 =>
            array(
                'id' => '47',
                'name_vn' => 'du lịch Sapa',
                'name_en' => 'Sapa tours',
                'description' => 'quan lý tour sapa',
                'idparent' => '19',
                'status' => 1
            ),
            47 =>
            array(
                'id' => '48',
                'name_vn' => 'bài viết',
                'name_en' => 'article',
                'description' => 'Những bài viết giới thiệu',
                'idparent' => '0',
                'status' => 1
            )
        ));
    }
}
