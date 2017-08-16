<?php

use Illuminate\Database\Seeder;

class roleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "admin",
			'ket' => "Administrator"
		]);

		DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "supervisor",
			'ket' => "Supervisor"
		]);

		DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "cs",
			'ket' => "CS"
		]);

		DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "teller",
			'ket' => "Teller"
		]);

		DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "adm",
			'ket' => "Admin Pembiayaan"
		]);

		DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "finance",
			'ket' => "Finance Accounting"
		]);

		DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "ao",
			'ket' => "Accounting Officer"
		]);

		DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "kas",
			'ket' => "Kas"
		]);

		DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "report",
			'ket' => "report"
		]);

		DB::insert('insert into roles (role, ket ) values (:role, :ket)', [
			'role' => "legal",
			'ket' => "Legal"
		]);

		$this->command->info('Berhasil menambah 10 role!');
    }
}
