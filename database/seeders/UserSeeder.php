<?php

namespace Database\Seeders;
use Hash;
use DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		 DB::table('user')->insert([
            'kode_user' => 'admin',
            'nama_user' => 'admin',
            'password' => Hash::make('x'),
        ]);
    }
}
