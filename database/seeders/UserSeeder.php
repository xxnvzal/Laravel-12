<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'Dr. Richard',
                'alamat' => 'Jl. Indo , Jakarta',
                'no_hp' => '081234567890',
                'email' => 'dokter@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'role' => 'dokter',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ronaldo',
                'alamat' => 'Jl. Portugal , Jakarta',
                'no_hp' => '0819283821',
                'email' => 'pasien@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'role' => 'pasien',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}