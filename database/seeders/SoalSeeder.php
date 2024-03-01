<?php

namespace Database\Seeders;

use App\Models\Soal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id_awal_kegiatan_praktikum = 1000;
        $id_akhir_kegiatan_praktikum = 1024;
        for ($i = $id_awal_kegiatan_praktikum; $i < $id_akhir_kegiatan_praktikum; $i++) {
            Soal::insert([
                'id_kegiatan_praktikum' => 1000 + $i,
                'path_soal_praktikum' => 'template/' . ($i + 1),
                'kode_soal_praktikum' => 'KODE_' . ($i + 1),
            ]);
        }
    }
}
