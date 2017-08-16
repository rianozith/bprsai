<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatDatiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_tab');
            $table->integer('sandi');
            $table->string('keterangan');
            $table->date('tgl_update');
            $table->integer('release')->nullable();
            $table->integer('kode_reg')->nullable();
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
        Schema::drop('datis');
    }
}
