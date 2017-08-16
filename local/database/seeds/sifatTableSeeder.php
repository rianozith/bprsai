<?php

use Illuminate\Database\Seeder;

class sifatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into sifats (kd_sifat, ket) values (:kd_sifat, :ket)', [
			'kd_sifat' => 2,
			'ket' => "Sifat A"
		]);

		$this->command->info('Berhasil menambah 1 sifat!');
    }
}
