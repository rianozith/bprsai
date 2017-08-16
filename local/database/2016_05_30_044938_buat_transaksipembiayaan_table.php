<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTransaksipembiayaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksipembiayaans', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgltransaksi');
            $table->timestamps();
            //relasi foreign key
            $table->integer('id_nasabah')->unsigned();
            $table->integer('id_pembiayaan')->unsigned();

            $table->foreign('id_nasabah')
                ->references('id')
                ->on('nasabahs')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_pembiayaan')
                ->references('id')
                ->on('pembiayaans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksipembiayaans');
    }
}
