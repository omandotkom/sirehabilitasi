<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'asesmen',
            'role' => 'asesmen',
            'email' => 'asesment'.'@gmail.com',
            'password' => Hash::make('password')
        ]);
    
    DB::table('users')->insert([
        'name' => 'sosial',
        'role' => 'sosial',
        'email' => 'sosial'.'@gmail.com',
        'password' => Hash::make('password')
    ]);
    DB::table('users')->insert([
        'name' => 'perawat',
        'role' => 'perawat',
        'email' => 'perawat'.'@gmail.com',
        'password' => Hash::make('password')
    ]);
    DB::table('users')->insert([
        'name' => 'admin',
        'role' => 'admin',
        'email' => 'admin'.'@gmail.com',
        'password' => Hash::make('password'),
    ]);
    
}

}
