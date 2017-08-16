<?php

use Illuminate\Database\Seeder;

class agunanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into agunans (kd_agunan, nama) values (:kd_agunan, :nama)', [
			'kd_agunan' => 1,
			'nama' => "Kas, tabungan dan Deposito"
		]);

		DB::insert('insert into agunans (kd_agunan, nama) values (:kd_agunan, :nama)', [
			'kd_agunan' => 2,
			'nama' => "Perhiasan Emas dan Logam Mulia"
		]);

		DB::insert('insert into agunans (kd_agunan, nama) values (:kd_agunan, :nama)', [
			'kd_agunan' => 3,
			'nama' => "Tanah dan Bangunan"
		]);

		DB::insert('insert into agunans (kd_agunan, nama) values (:kd_agunan, :nama)', [
			'kd_agunan' => 4,
			'nama' => "Kendaraan Bermotor"
		]);

		DB::insert('insert into agunans (kd_agunan, nama) values (:kd_agunan, :nama)', [
			'kd_agunan' => 5,
			'nama' => "Tanah, Bangunan, Kendaraan"
		]);

		DB::insert('insert into agunans (kd_agunan, nama) values (:kd_agunan, :nama)', [
			'kd_agunan' => 6,
			'nama' => "Kas, Tab, Dep, Kedaraan"
		]);

		DB::insert('insert into agunans (kd_agunan, nama) values (:kd_agunan, :nama)', [
			'kd_agunan' => 7,
			'nama' => "Emas, Tanah dan Bangunan"
		]);

		DB::insert('insert into agunans (kd_agunan, nama) values (:kd_agunan, :nama)', [
			'kd_agunan' => 8,
			'nama' => "Emas, Logam Mulia, Tanah Bang"
		]);

		DB::insert('insert into agunans (kd_agunan, nama) values (:kd_agunan, :nama)', [
			'kd_agunan' => 9,
			'nama' => "Lainnya"
		]);

		$this->command->info('Berhasil menambah 10 agunan!');
    }
}
