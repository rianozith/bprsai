<?php

use Illuminate\Database\Seeder;

class golnasabahTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 800,
			'keterangan' => "Pemerintah Pusat ( Sektor Pemerintah )	"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 805,
			'keterangan' => "Pemerintah Daerah ( Sektor Pemerintah )	"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 832,
			'keterangan' => "BUMN ( Sektor Pemerintah )	"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 834,
			'keterangan' => "BUMD ( Sektor Pemerintah )	"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 845,
			'keterangan' => "Lainnya ( Sektor Pemerintah )	"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 840,
			'keterangan' => "Sektor Pemerintah Campuran	"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 860,
			'keterangan' => "Perusahaan"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 870,
			'keterangan' => "Koperasi"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 872,
			'keterangan' => "Kelompok"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 874,
			'keterangan' => "Pegawai / pensiunan ( PNS, TNI / POLRI, Pegawai Lembaga Negara )	"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 876,
			'keterangan' => "Non pegawai / Pensiunan ( Perorangan )	"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 862,
			'keterangan' => "Baitul mal wa Tammil	"
		]);

		DB::insert('insert into golnasabahs (sandi, keterangan) values (:sandi, :keterangan )', [
			'sandi' => 873,
			'keterangan' => "Badan Lembaga Amil Zakat Infaq dan Shodaqoh ( BAZIZ )	"
		]);

		$this->command->info('Berhasil menambah 13 golongan nasabah!');
    }
}
