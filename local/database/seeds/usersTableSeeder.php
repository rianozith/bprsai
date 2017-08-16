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
			'password' => "$2y$10$06FQRfQZU0et/9kXtvBhVO9hU71WjwkFn1Kkc1hdZ7b40VAb9Egre",
            'remember_token' => ""
		]);

        $this->command->info('Berhasil menambahkan 1 user!');
    }
}
