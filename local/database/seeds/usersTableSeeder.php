<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into users (name, username, inisial, role, email, password, remember_token) values (:name, :username, :inisial, :role, :email, :password, :remember_token)', [
			'name' => "Administrator", 
			'username' => "admin", 
			'inisial' => "ADM",
			'role' => "admin", 
			'email' => "admin@admin.com", 
			'password' => "$2a$06$1/VLRef6wCX9JX2TGhkCQO8YfAG65hElMYY4yPRanoDHp89HBAIrC",
            'remember_token' => ""
		]);

        $this->command->info('Berhasil menambahkan 1 user!');
    }
}
