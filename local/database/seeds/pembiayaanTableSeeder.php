<?php

use Illuminate\Database\Seeder;

class pembiayaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::insert('insert into pembiayaans (namaao, pengajuanbiaya, tujuanbiaya, jangkawaktu, jnspmbiayaan, bagihasilbank, bagihasilnasabah, biayaadmin, brgjaminan, jmlmargin, tglmohon, angsuranpokok, angsuranmargin, angsuranpokokakhir, angsuranmarginakhir, biayatagih, pemilikjaminan, sifata, jnspenggunaan, golongan, sektor, agunan, hrgperolehan, njop, ikat, wilayah, biaya, metodebghasil, noregister, tujuankepemilikan, lokasiusaha, namapembiayaan, golpiutang, tglrealisasi, nopp, nosph, nottun, created_at, updated_at, id_nasabah) 
        	values (:namaao, :pengajuanbiaya, :tujuanbiaya, :jangkawaktu, :jnspmbiayaan, :bagihasilbank, :bagihasilnasabah, :biayaadmin, :brgjaminan, :jmlmargin, :tglmohon, :angsuranpokok, :angsuranmargin, :angsuranpokokakhir, :angsuranmarginakhir, :biayatagih, :pemilikjaminan, :sifata, :jnspenggunaan, :golongan, :sektor, :agunan, :hrgperolehan, :njop, :ikat, :wilayah, :biaya, :metodebghasil, :noregister, :tujuankepemilikan, :lokasiusaha, :namapembiayaan, :golpiutang, :tglrealisasi, :nopp, :nosph, :nottun, :created_at, :updated_at, :id_nasabah)', [
			'namaao' => "MTD",
			'pengajuanbiaya' => 10000000,
			'tujuanbiaya' => "renovasi rumah",
			'jangkawaktu' => 12,
			'jnspmbiayaan' => "mudhorobah",
			'bagihasilbank' => 1,
			'bagihasilnasabah' => 1,
			'biayaadmin' => 50000,
			'brgjaminan' => "Mobil Rush",
			'jmlmargin' => 4000000,
			'tglmohon' => "2016-06-02",
			'angsuranpokok' => 300000,
			'angsuranmargin' => 300000,
			'angsuranpokokakhir' => 1000000,
			'angsuranmarginakhir' => 1000000,
			'biayatagih' => 20000,
			'pemilikjaminan' => "Riano",
			'sifata' => 2,
			'jnspenggunaan' => 10,
			'golongan' => 876,
			'sektor' => 1019,
			'agunan' => 4,
			'hrgperolehan' => 5000000,
			'njop' => 1234,
			'ikat' => "fiducia",
			'wilayah' => 102,
			'biaya' => 20000,
			'metodebghasil' => 2,
			'noregister' => "099/06/REG-MKT/AI/2016",
			'tujuankepemilikan' => 73,
			'lokasiusaha' => "Tangerang",
			'namapembiayaan' => "Riano",
			'golpiutang' => 1,
			'tglrealisasi' => "2016-06-03",
			'nopp' => "asdf",
			'nosph' => "asdf123",
			'nottun' => "12345",
			'created_at' => "2016-06-01 22:37:22",
			'updated_at' => "2016-06-01 22:37:22",
			'id_nasabah' => 0
		]);

		$this->command->info('Berhasil menambah 1 pembiayaan!');
    }
}
