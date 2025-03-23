<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder {
    public function run() {
        DB::table('periksas')->insert([
            [
                'id_pasien' => 2, 
                'id_dokter' => 1, 
                'tgl_periksa' => '2024-07-15 10:00:00',
                'catatan' => 'Demam tinggi',
                'biaya_periksa' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

