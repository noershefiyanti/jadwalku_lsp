<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Noer Shefiyanti',
            'email' => 'noershefi@gmail.com',
            'password' => bcrypt('sefi12345'),
            'prodi' => 'D3-MI PSDKU Kediri',
            'nim' => '2131730031',
            'tgl' => '2023-11-11',            
        ]);
    }
}
