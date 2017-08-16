<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatIkatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kd_ikat');
            $table->string('ket');
            $table->integer('ikat');
            $table->string('otorisasi')->nullable();
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
        Schema::drop('ikats');
    }
}
