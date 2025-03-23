<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPeriksaSeeder extends Seeder {
    public function run() {
        DB::table('detail_periksas')->insert([
            [
                'id_periksa' => 1, 
                'id_obat' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_periksa' => 1,
                'id_obat' => 2, // Amoxicillin
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

