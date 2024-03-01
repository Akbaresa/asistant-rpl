<?php

namespace Database\Seeders;

use App\Models\Pelanggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggaran::insert([
            [
                'id_praktikan' => 5000,
                'nama_pelanggaran' => 'telat masuk praktikum',
                'poin' => 5,
                'id_sesi' => 1000
            ],
        ]);
    }
}
