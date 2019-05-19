<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
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
        1 =>
        array(
            'id' => '47',
            'name_vn' => 'Phú Quốc - chưa xa đã muốn quay lại',
            'name_en' => 'Vietravel upgrades a Branch office in Phu Quoc Island',
            'content_vn' => '',
            'content_en' => '19',
            'images'
            'idcategory' => 5,
        ),
        2 =>
        array(
            'id' => '48',
            'name_vn' => 'bài viết',
            'name_en' => 'article',
            'description' => 'Những bài viết giới thiệu',
            'idparent' => '0',
            'status' => 1
        )
      ));

      DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
