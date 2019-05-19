<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function($table){
            $table->bigIncrements('id');
            $table->string('name_en', 255);
            $table->string('name_vn', 255);
            $table->char('code', 10);
            $table->tinyInteger('days');
            $table->tinyInteger('nights');
            $table->integer('idcategory')->unsigned();
            $table->foreign('idcategory')->references('id')->on('category');

            $table->text('transport');
            $table->text('images');
            $table->text('infotour_en')->nullable();
            $table->text('infotour_vn')->nullable();
            $table->float('price_en');
            $table->bigInteger('price_vn')->unsigned();
            $table->text('support_en')->nullable();
            $table->text('support_vn')->nullable();
            $table->text('unsupport_en')->nullable();
            $table->text('unsupport_vn')->nullable();
            $table->text('notify_en')->nullable();
            $table->text('notify_vn')->nullable();
            $table->text('services_en')->nullable();
            $table->text('services_vn')->nullable();
            $table->text('tags_en')->nullable();
            $table->text('tags_vn')->nullable();
            $table->bigInteger('views')->unsigned();
            $table->enum('status', ['public', 'pending', 'expried', 'deleted']);
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
        Schema::drop('tours');  
    }
}