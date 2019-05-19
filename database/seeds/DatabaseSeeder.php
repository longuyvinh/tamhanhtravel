<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }
        
        $this->call(UsersTableSeeder::class);
        $this->call(FactorySeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(OfficesTableSeeder::class);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
        Model::reguard();
    }
}
