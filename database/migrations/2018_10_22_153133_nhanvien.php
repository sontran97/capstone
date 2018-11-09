<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
          $table->increments('id');
          $table->string('ten');
          $table->string('email')->unique();
          $table->string('gender');
          $table->integer('id_khoa')->unsigned();
          $table->foreign('id_khoa')->references('id')->on('Khoa');
        });
        // Schema::table('nhanvien', function ($table) {
        //   $table->integer('id_khoa')->unsigned();
        //
        //   $table->foreign('id_khoa')->references('id')->on('Khoa');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
