<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatPembiayaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembiayaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaao');

            $table->string('pengajuanbiaya');
            $table->integer('pengajuanbiayainteger');
            $table->string('pengajuanbiayaterbilang');

            $table->string('tujuanbiaya');
            $table->integer('jangkawaktu');
            $table->string('jnspmbiayaan');
            $table->integer('bagihasilbank')->nullable();
            $table->integer('bagihasilnasabah')->nullable();

            $table->string('biayaadmin');
            $table->integer('biayaadmininteger');
            $table->string('biayaadminterbilang');

            $table->string('brgjaminan');

            $table->string('kepemilikanjaminan');
            $table->string('jaminannama')->nullable();
            $table->string('jaminanumur')->nullable();
            $table->string('jaminanpekerjaan')->nullable();
            $table->string('jaminanalamat')->nullable();
            $table->string('jaminanktp')->nullable();

            $table->string('marginbank');
            $table->integer('marginbankinteger');
            $table->string('marginbankterbilang');

            $table->string('totalkewajiban')->nullable(); 
            $table->integer('totalkewajibaninteger')->nullable();
            $table->string('totalkewajibanterbilang')->nullable();

            $table->date('tglmohon');

            $table->string('angsuranpokok');
            $table->integer('angsuranpokokinteger');
            $table->string('angsuranpokokterbilang');

            $table->string('angsuranmargin');
            $table->integer('angsuranmargininteger');
            $table->string('angsuranmarginterbilang');

            $table->string('angsuranpokokakhir');
            $table->integer('angsuranpokokakhirinteger');
            $table->string('angsuranpokokakhirterbilang');

            $table->string('angsuranmarginakhir');
            $table->integer('angsuranmarginakhirinteger');
            $table->string('angsuranmarginakhirterbilang');

            $table->string('biayatagih');
            $table->integer('biayatagihinteger');
            $table->string('biayatagihterbilang');

            $table->string('pemilikjaminan');
            $table->string('sifata')->default(2);
            $table->string('jnspenggunaan');
            $table->string('golongan');
            $table->string('sektor');
            $table->string('agunan');

            $table->string('hrgperolehan');
            $table->integer('hrgperolehaninteger');
            $table->string('hrgperolehanterbilang');

            $table->string('njop')->nullable();
            $table->integer('njopinteger')->nullable();
            $table->string('njopterbilang')->nullable();

            $table->string('ikat');
            $table->string('wilayah');
            $table->string('metodebghasil');
            $table->string('noregister');
            $table->string('tujuankepemilikan');
            $table->string('lokasiusaha');
            $table->string('namapembiayaan');
            $table->string('golpiutang');
            $table->date('tglrealisasi');
            $table->string('nopp')->nullable();
            $table->string('nosph')->nullable();
            $table->string('nottun')->nullable();

            $table->string('nilaiagunan');
            $table->integer('nilaiagunaninteger');
            $table->string('nilaiagunanterbilang');

            $table->string('ditaksasioleh')->nullable();
            $table->string('memokomite')->nullable();

            $table->date('tglakhir');
            $table->timestamps();

            $table->unsignedInteger('id_nasabah')->nullable();
            $table->foreign('id_nasabah')->references('id')->on('nasabahs')->onUpdate('CASCADE')->onDelete('CASCADE');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pembiayaans');
    }
}
