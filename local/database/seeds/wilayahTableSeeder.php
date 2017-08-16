<?php

use Illuminate\Database\Seeder;

class wilayahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into wilayahs (kd_wilayah, ket) values (:kd_wilayah, :ket)', [
			'kd_wilayah' => 1,
			'ket' => "Kabupaten/Kota yang sama dengan Bank Pelapor "			
		]);

		DB::insert('insert into wilayahs (kd_wilayah, ket) values (:kd_wilayah, :ket)', [
			'kd_wilayah' => 2,
			'ket' => "Kabupaten/Kota lain dlm propinsi yg sama dengan Bank Pelapor"			
		]);

		DB::insert('insert into wilayahs (kd_wilayah, ket) values (:kd_wilayah, :ket)', [
			'kd_wilayah' => 3,
			'ket' => "Propinsin lain dengan Bank Pelapor "			
		]);

		DB::insert('insert into wilayahs (kd_wilayah, ket) values (:kd_wilayah, :ket)', [
			'kd_wilayah' => 4,
			'ket' => "Ibukota Negara"			
		]);

		$this->command->info('Berhasil menambah 4 jenis wilayah!');
    }
}
