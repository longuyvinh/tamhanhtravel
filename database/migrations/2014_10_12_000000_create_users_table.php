<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('role');
            $table->string('password');
            $table->string('avatar')->nullable();;
            $table->string('address')->nullable();;
            $table->integer('country');
            $table->timestamp('dateofbirth');
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::enableForeignKeyConstraints();
        Schema::drop('users');
        Schema::disableForeignKeyConstraints();
    }
}
