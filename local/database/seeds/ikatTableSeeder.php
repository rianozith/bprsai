<?php

use Illuminate\Database\Seeder;

class ikatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into ikats (kd_ikat, ket, ikat) values (:kd_ikat, :ket, :ikat)', [
			'kd_ikat' => 1,
			'ket' => "Kendaraan Bermotor (FIDUSIA)",
			'ikat' => 50
		]);

		DB::insert('insert into ikats (kd_ikat, ket, ikat) values (:kd_ikat, :ket, :ikat)', [
			'kd_ikat' => 2,
			'ket' => "Pengikatan (APHT)",
			'ikat' => 80
		]);

		DB::insert('insert into ikats (kd_ikat, ket, ikat) values (:kd_ikat, :ket, :ikat)', [
			'kd_ikat' => 3,
			'ket' => "Non Pengikatan (NJOP)",
			'ikat' => 60
		]);

		DB::insert('insert into ikats (kd_ikat, ket, ikat) values (:kd_ikat, :ket, :ikat)', [
			'kd_ikat' => 4,
			'ket' => "Deposito / Tabungan / Emas",
			'ikat' => 100
		]);

		$this->command->info('Berhasil menambah 4 jenis pengikat!');
    }
}
