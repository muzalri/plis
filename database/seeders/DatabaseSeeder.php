<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Petugas::create([
            'nama_petugas' => '',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'telp' => '08990671253',
            'level' => 'admin',
        ]);
    }
}
