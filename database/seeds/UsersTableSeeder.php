<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->truncate();
        DB::table('users')->insert([
        	['id' => 1,
            'name' => 'root',
            'email' => 'root@gmail.com',
            'phone' => '0909123456',
            'role_id' => 1,
            'password' => bcrypt('123456!'),
            'avatar' => env('APP_URL') . '/images/avatar/root.jpg',
            'address' => '308 dien bien phu',
            'country' => 233,
            'skype' => 'longuyvinh'
            ]
        ]);
    }
}
