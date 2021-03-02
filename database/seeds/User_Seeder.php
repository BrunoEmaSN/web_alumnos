<?php

use Illuminate\Database\Seeder;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id_u' => 1,
            'name' => 'jojo',
            'email' => 'jonathan@jojo.com',
            'password' => Hash::make('Miargentina1'),
        ]);
    }
}
