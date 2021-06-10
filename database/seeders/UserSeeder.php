<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

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
            'name' => 'admin',
            'email' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('a'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Andi Mahardika',
            'email' => 'siswa',
            'role' => 'siswa',
            'password' => Hash::make('s'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Naura Salsabila',
            'email' => 'guru',
            'role' => 'guru',
            'password' => Hash::make('g'),
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
