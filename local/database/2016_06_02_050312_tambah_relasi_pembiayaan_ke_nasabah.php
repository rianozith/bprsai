<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahRelasiPembiayaanKeNasabah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembiayaans', function (Blueprint $table) {
            $table->integer('id_nasabah')->unsigned()->change();
            $table->foreign('id_nasabah')->reference('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pembiayaans', function(Blueprint $table){
            $table->dropForeign('pembiayaans_id_nasabah_foreign');
        });

        Schema::table('pembiayaans', function(Blueprint $table){
            $table->dropIndex('pembiayaans_id_nasabah_foreign');
        });

        Schema::table('pembiayaans', function(Blueprint $table){
            $table->integer('id_nasabah')->change();
        });
        
    }
}
