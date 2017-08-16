<?php

use Illuminate\Database\Seeder;

class jpeggnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into jpeggns (kd_jpeggn, ket, otorisasi) values (:kd_jpeggn, :ket, :otorisasi)', [
			'kd_jpeggn' => 10,
			'ket' => "MODAL KERJA / 10",
			'otorisasi' => "Y"
		]);

		DB::insert('insert into jpeggns (kd_jpeggn, ket, otorisasi) values (:kd_jpeggn, :ket, :otorisasi)', [
			'kd_jpeggn' => 40,
			'ket' => "INVESTASI / 20",
			'otorisasi' => "Y"
		]);

		DB::insert('insert into jpeggns (kd_jpeggn, ket, otorisasi) values (:kd_jpeggn, :ket, :otorisasi)', [
			'kd_jpeggn' => 70,
			'ket' => "KONSUMTIF / 70",
			'otorisasi' => "Y"
		]);

		$this->command->info('Berhasil menambah 3 jenis penggunaan!');
    }
}
