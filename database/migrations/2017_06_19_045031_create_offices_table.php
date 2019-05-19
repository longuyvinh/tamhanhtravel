<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10)->unique();
            $table->string('name_en', 50);
            $table->string('name_vn', 50);
            $table->string('desciption_en', 100)->nullable();
            $table->string('desciption_vn', 100)->nullable();
            $table->integer('weight')->unsigned();
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
        Schema::drop('offices');
    }
}
