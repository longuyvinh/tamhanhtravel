<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_log', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->enum('type' , ['front_end', 'tour', 'user', 'order', 'hotel', 'system']);
            $table->string('content');
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
        Schema::drop('users_log');
    }
}
