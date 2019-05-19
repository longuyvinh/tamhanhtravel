<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function($table){
            $table->bigIncrements('id');
            $table->bigInteger('idtour')->unsigned();
            $table->foreign('idtour')->references('id')->on('tours');
            $table->text('content');
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone', 15);
            $table->boolean('status')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feedback');
    }
}
