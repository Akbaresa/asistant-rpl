<?php

namespace Database\Seeders;

use App\Models\Praktikum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PraktikumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Praktikum::insert([
            [
                'tahun' => '2024/2025',
                'id_jenis_praktikum' => 1000
            ],
            [
                'tahun' => '2024/2025',
                'id_jenis_praktikum' => 1001
            ],
            [
                'tahun' => '2024/2025',
                'id_jenis_praktikum' => 1002
            ],
            [
                'tahun' => '2024/2025',
                'id_jenis_praktikum' => 1003
            ],
        ]);
    }
}
