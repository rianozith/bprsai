<?php

use Illuminate\Database\Seeder;

class jnspembiayaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into jnspembiayaans (kd_pembiayaan, ket) values (:kd_pembiayaan, :ket)', [
			'kd_pembiayaan' => 1,
			'ket' => "Mudharabah"
		]);

		DB::insert('insert into jnspembiayaans (kd_pembiayaan, ket) values (:kd_pembiayaan, :ket)', [
			'kd_pembiayaan' => 2,
			'ket' => "Murabahah"
		]);

		DB::insert('insert into jnspembiayaans (kd_pembiayaan, ket) values (:kd_pembiayaan, :ket)', [
			'kd_pembiayaan' => 3,
			'ket' => "Qordh"
		]);

		DB::insert('insert into jnspembiayaans (kd_pembiayaan, ket) values (:kd_pembiayaan, :ket)', [
			'kd_pembiayaan' => 4,
			'ket' => "Rahn"
		]);
		$this->command->info('Berhasil menambah 4 jenis pembiayaan!');
    }
}
