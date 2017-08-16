<?php

use Illuminate\Database\Seeder;

class newsektorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1001,
			'ket' => "Pertanian, Perburuan dan Kehutanan",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1002,
			'ket' => "Perikanan",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1003,
			'ket' => "Pertambangan dan Penggalian",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1004,
			'ket' => "Industri Pengolahan",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1005,
			'ket' => "Listrik, Gas dan Air",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1006,
			'ket' => "Konstruksi",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1007,
			'ket' => "Perdagangan Besar dan Eceran",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1008,
			'ket' => "Penyediaan Akomodasi dan Panye",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1009,
			'ket' => "Transportasi, Pergudangan dan",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1010,
			'ket' => "Perantara Keuangan",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1011,
			'ket' => "Real Estate	",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1012,
			'ket' => "Administrasi Pemerintahan, Per	",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1013,
			'ket' => "Jasa Pendidikan	",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1014,
			'ket' => "Jasa Kesehatan dan Kegiatan So	",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1015,
			'ket' => "Jasa Perorangan yang Melayani	",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1016,
			'ket' => "Jasa Perorangan yang Melayani	",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1017,
			'ket' => "Badan Internasional dan Badan	",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1018,
			'ket' => "Kegiatan yang belum Jelas Bata	",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1019,
			'ket' => "Rumah Tangga	",
			'otorisasi' => ""
		]);

		DB::insert('insert into new_sektors (kd_sektor1, ket, otorisasi) values (:kd_sektor1, :ket, :otorisasi)', [
			'kd_sektor1' => 1020,
			'ket' => "Bukan Lapangan Usaha Lainnya	",
			'otorisasi' => ""
		]);

		$this->command->info('Berhasil menambah 20 sektor!');
    }
}
