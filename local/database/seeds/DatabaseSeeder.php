<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call('agunanTableSeeder');
        $this->call('golnasabahTableSeeder');
        $this->call('ikatTableSeeder');
        $this->call('jnspembiayaanTableSeeder');
        $this->call('jpeggnTableSeeder');
        $this->call('newsektorTableSeeder');
        $this->call('officerTableSeeder');
        $this->call('roleTableSeeder');
        $this->call('sifatTableSeeder');
        $this->call('usersTableSeeder');
        $this->call('wilayahTableSeeder');

        Model::reguard();
    }
}
