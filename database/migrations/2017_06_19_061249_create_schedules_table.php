<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->integer('from')->unsigned();
            $table->foreign('from')->references('id')->on('offices');
            $table->integer('to')->unsigned();
            $table->foreign('to')->references('id')->on('offices');
            $table->integer('times')->unsigned()->nullable();
            $table->integer('start_h')->unsigned();
            $table->integer('start_m')->unsigned()->nullable();
            $table->boolean('status')->default(true);
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
        Schema::drop('schedules');
    }
}
