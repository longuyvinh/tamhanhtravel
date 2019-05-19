<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('articles', function($table){
           $table->bigIncrements('id');
           $table->string('name_en', 255);
           $table->string('name_vn', 255);
           $table->text('content_en');
           $table->text('content_vn');
           $table->string('images', 100);
           $table->integer('idcategory')->unsigned();
           $table->foreign('idcategory')->references('id')->on('category')->onDelete('cascade');
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
       // Schema::table('articles', function (Blueprint $table) {
       //       $table->dropColumn('idcategory');
       //   });
       Schema::drop('articles');
     }
}
