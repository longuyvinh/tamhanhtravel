<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_detail', function($table){
            $table->bigIncrements('id');
            $table->bigInteger('idtour')->unsigned();
            $table->foreign('idtour')->references('id')->on('tours');
            $table->string('title', 255);
            $table->text('content');
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
        Schema::drop('tour_detail');
    }
}
