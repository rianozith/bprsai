<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatJpeggnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jpeggns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kd_jpeggn');
            $table->string('ket');
            $table->char('otorisasi')->nullable();
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
        Schema::drop('jpeggns');
    }
}
