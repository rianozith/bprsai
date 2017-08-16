<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kdnas');
            $table->string('kdnas_old')->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->integer('kdpos')->nullable();
            $table->string('telp')->nullable();
            $table->string('noktp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('tptlahir')->nullable();
            $table->string('tglahir')->nullable();
            $table->string('umur')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('namaibu')->nullable();
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
        Schema::drop('nasabahs');
    }
}
