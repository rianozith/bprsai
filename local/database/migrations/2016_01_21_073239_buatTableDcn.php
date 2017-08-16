<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableDcn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dcnasabahs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('noreg_ao')->nullable();
            $table->string('nama_komite')->nullable();
            $table->string('dcn_firstname');
            $table->string('dcn_lastname')->nullable();
            // $table->string('tpt_lahir')->nullable();
            // $table->date('tgl_lahir')->nullable();
            // $table->string('dcn_alamat')->nullable();
            // $table->integer('no_telp')->nullable();
            // $table->string('ktp_npwp')->nullable();
            // $table->integer('jml_biaya_pengajuan')->nullable();
            // $table->string('tujuan_penggunaan')->nullable();
            // $table->integer('jangka_waktu')->nullable();
            // $table->string('jns_pembiayaan')->nullable();
            // $table->integer('porsi_bank')->nullable();
            // $table->integer('porsi_dcn')->nullable();
            // $table->integer('tot_biaya_admin')->nullable();
            // $table->string('brg_jaminan')->nullable();
            // $table->integer('total_margin')->nullable();
            // $table->date('tgl_permohonan')->nullable();
            // $table->date('tgl_jangkawaktu')->nullable();
            // $table->integer('angsuran_pokok')->nullable();
            // $table->integer('angsuran_margin')->nullable();   
            // $table->integer('angsuran_pokok_akhir')->nullable();         
            // $table->integer('angsuran_margin_akhir')->nullable();
            // $table->integer('biaya_penagihan')->nullable();
            // $table->string('pemilik_jaminan')->nullable();
            // $table->string('sifat_a')->nullable();
            // $table->string('jns_penggunaan')->nullable();
            // $table->string('gol')->nullable();
            // $table->string('sek_ekonomi')->nullable();
            // $table->string('agunan1')->nullable();
            // $table->integer('nilai_agunan1')->nullable();
            // $table->string('agunan2')->nullable();
            // $table->integer('nilai_agunan2')->nullable();
            // $table->string('agunan3')->nullable();
            // $table->integer('nilai_agunan3')->nullable();
            // $table->integer('tot_agunan')->nullable();            
            // $table->integer('hrg_perolehan')->nullable();
            // $table->integer('njop')->nullable();
            // $table->string('jns_ikat')->nullable();
            // $table->string('wilayah')->nullable();
            // $table->integer('biaya_admin')->nullable();
            // $table->string('metode_bghsl')->nullable();
            // $table->string('peminjam')->nullable();
            // $table->string('tujuan_kepemilikan')->nullable();                
            // $table->string('lokasi_usaha')->nullable();
            // $table->string('nama_pembiayaan')->nullable();
            // $table->string('gol_piutang')->nullable();
            // $table->date('tgl_real')->nullable();
            // $table->string('no_pp')->nullable();
            // $table->string('no_sph')->nullable();
            // $table->string('no_ttun')->nullable();
            // $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dcnasabahs');
    }
}
